<?php
require_once('db.php');

if (isset($_COOKIE['user'])) {
    $login = $_COOKIE['user'];
    
    $sql = "SELECT id FROM `user` WHERE login = '$login'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userID = $user['id'];
    } else {
        echo "Пользователь не найден";
    }
} else {
    echo "Cookie 'user' не установлено";
}

$sql = "SELECT * FROM `user` WHERE id = '$userID' AND login = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $email = $user['email'];
    $login = $user['login'];
} else {
    $email = "Адрес электронной почты не найден";
}

$conn->close();

?>