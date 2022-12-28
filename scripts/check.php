<?php
require_once 'connect.php';

session_start();
extract($_POST);
$select = "SELECT * FROM `users` WHERE `login`='$login' and `password`='$password'";
$result = $connect -> query($select) -> fetch_array();

if ($result) {
    $_SESSION['login'] = $login;
    if ($_SESSION['login'] == 'admin') {
        header('location: ../admin.php');
    } else {
        header('location: ../profile.php');
    }
} else {
    $error = 'Неверный логин или пароль!';
    header('location: ../login.php?error='.$error);
}
?>