<?php

require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    echo'Заполни все поля';
} else {
$sql = "INSERT INTO 'users' (login, password) VALUES ('$login', '$password')";
if ($conn -> query($sql) === TRUE) {
    echo "Всё ок";
}
else {
    echo "):" . $conn->error;
}
}
$scon -> query($sql);