<?php
session_start();
require_once 'connect.php';

$login = $_REQUEST['login'];
$password = $_REQUEST['password'];

$select = "SELECT * FROM `users`";
$result = $connect -> query($select) -> fetch_all(MYSQLI_ASSOC);

$insert = "INSERT INTO `users`(`login`, `password`) VALUES ('$login', '$password')";
$result = $connect -> query($insert);

header('location: ../login.php');
?>