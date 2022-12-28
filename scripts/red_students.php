<?php
require_once 'connect.php';

$student_id = $_REQUEST['student_id'];
$surname = $_REQUEST['Surname'];
$name = $_REQUEST['Name'];
$patronymic = $_REQUEST['Patronymic'];
$offset_card_number = $_REQUEST['offset_card_number'];
$faculty = $_REQUEST['Faculty'];
$group = $_REQUEST['Group'];

$insert = "UPDATE `students` SET `Surname`='$surname', `Name`='$name', `Patronymic`='$patronymic', `offset_card_number`='$offset_card_number', `Faculty`='$faculty', `Group`='$group' WHERE student_id='$student_id' LIMIT 1";
$result = $connect -> query($insert);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Успешно</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo.svg" type="image/svg+xml">
</head>
<body class="container">
<div class="load" id="load">
    <img src="../img/spin.gif" alt="load img" class="load__img">
</div>
<form action="red_students.php" method="post">
    <img src="../img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Успешно</h3>
    <p>Данные студента были успешно обновлены!</p>
</form>
<script src="script.js"></script>
</body>
</html>
