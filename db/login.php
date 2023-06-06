<?php
require_once('db.php');

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if (empty($email) || empty($pass)) {
    header('Location: /login/not-found');
    exit();
}

$pass = md5($pass . "3jkr2hcu7i29rh");

$sql = "SELECT * FROM `user` WHERE email = '$email' AND pass = '$pass' AND confirmed = 1";

$result = $conn->query($sql);
$user = $result->fetch_assoc();

if (count($user) == 0) {
    header('Location: /login/not-found');
    exit();
}

setcookie("user", $user["login"], time() + 3600, "/");

header('Location: /');
?>
