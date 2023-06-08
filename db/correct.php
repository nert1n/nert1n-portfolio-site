<?php

if (mb_strlen($login) < 4) {  
    echo "Логин слишком мал!";
    exit();
} else if (mb_strlen($login) > 30) {  
    echo "Логин слишком большой!";
    exit();
} else if (mb_strlen($pass) < 9) {
    echo "Пароль слишком мал!";
    exit();
} else if (mb_strlen($pass) > 20) {
    echo "Пароль слишком большой!";
    exit();
} else if (mb_strlen($email) < 10) {
    echo "Емейл слишком маленький!";
    exit();
} else if (mb_strlen($email) > 50) {
    echo "Емейл слишком большой!";
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Неправильный формат адреса электронной почты!";
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

// Список разрешенных доменов
$allowedDomains = array(
    "gmail.com",
    "yahoo.com",
    "hotmail.com",
    "outlook.com",
    "aol.com",
    "icloud.com",
    "yandex.ru",
    "mail.ru",
    "inbox.ru",
    "list.ru",
    "bk.ru",
    "rambler.ru",
    "protonmail.com",
    "zoho.com",
    "gmx.com",
    "fastmail.com",
    "yahoo.co.uk",
    "live.com",
    "msn.com",
    "ymail.com",
    "rediffmail.com",
    "rocketmail.com"
); 

?>