<?php
require_once('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Подключение файлов PHPMailer
require '../db/phpmailer/src/PHPMailer.php';
require '../db/phpmailer/src/SMTP.php';
require '../db/phpmailer/src/Exception.php';

// Создание экземпляра класса PHPMailer
$mail = new PHPMailer(true);

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$repeatpass = filter_var(trim($_POST['repeatpass']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

require_once('correct.php');

$emailDomain = substr(strrchr($email, "@"), 1); // Получаем домен из адреса электронной почты

if (!in_array($emailDomain, $allowedDomains)) {
    echo "Регистрация доступна только с адресом электронной почты, принадлежащим определенным доменам!";
    exit();
}

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля!";
    exit();
}
if ($pass != $repeatpass) {
    echo "Пароли не совпадают!";
    exit();
}

$pass = md5($pass . "3jkr2hcu7i29rh");

// Проверка существования адреса электронной почты в базе данных
$sql = "SELECT * FROM `user` WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Адрес электронной почты уже зарегистрирован.";
    exit();
}

// Вставка данных в базу данных
$sql = "INSERT INTO `user` (`login`, `pass`, `email`) VALUES ('$login', '$pass', '$email')";

if ($conn->query($sql) === TRUE) {
    // Отправка подтверждающего письма
    try {
        // Настройка параметров отправки письма
        $mail->isSMTP();
        $mail->Host       = 'mx1.cityhost.com.ua';  // Укажите адрес SMTP-сервера
        $mail->SMTPAuth   = true;
        $mail->Username   = 'reg@perchikrp.com.ua';  // Укажите свой адрес электронной почты
        $mail->Password   = 'grr32Tt34fgTy5ThjdE';  // Укажите свой пароль от почтового ящика
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Установка отправителя и получателя
        $mail->setFrom('reg@perchikrp.com.ua', 'Email agree');  // Замените на свои данные
        $mail->addAddress($email, $login);  // Адрес получателя и имя

        // Содержимое письма
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Подтверждение адреса электронной почты';
        $mail->Body    = 'Для подтверждения адреса электронной почты перейдите по <a href="https://perchikrp.com.ua/db/confirm.php?email=' . urlencode($email) . '">ссылке</a>.';
        $mail->AltBody = 'Чтобы подтвердить адрес электронной почты, скопируйте и вставьте следующую ссылку в адресную строку браузера: https://perchikrp.com.ua/db/confirm.php?email=' . urlencode($email);

        // Отправка письма
        if ($mail->send()) {
            echo 'Успешная регистрация! Подтвердите адрес электронной почты, перейдя по ссылке в письме.';
        } else {
            echo 'Ошибка при отправке письма. Пожалуйста, попробуйте еще раз позже.';
        }
    } catch (Exception $e) {
        echo 'Ошибка при отправке письма. Пожалуйста, попробуйте еще раз позже. Error: ', $mail->ErrorInfo;
    }

    $user = $conn->query("SELECT * FROM `user` WHERE email = '$email' AND pass = '$pass'")->fetch_assoc();

    setcookie("user", $user["login"], time() + 3600, "/");

    //header('Location: /');
} else {
    echo "Ошибка: " . $conn->error;
}

$conn->close();
?>
