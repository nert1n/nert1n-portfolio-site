<?php
// MySql database
$servername = "yaris.cityhost.com.ua";
$username = "ch93f0bb7c_auditery";
$password = "g54tg45hGTu6";
$dbname = "ch93f0bb7c_db_auditery";

// DONT CHANGE
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
} else {
    "Agree!";
} ?>