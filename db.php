<?php

$servername = "ваш_хост";
$username = "ваше_имя_пользователя";
$password = "ваш_пароль";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
