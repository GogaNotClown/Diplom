<?php
session_start();
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$patronymic = $_POST['Patronymic'];
$offset_card_number = $_POST['offset_card_number'];
$select = $_POST['select'];
$group = $_POST['group'];

$connect = new mysqli('localhost', 'root', '', 'diplom');
$insert = "INSERT INTO `students`(`Surname`, `Name`, `Patronymic`, `offset_card_number`, `Faculty`, `Group`) VALUES ('$surname', '$name', '$patronymic', $offset_card_number, '$select', $group)";
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
<form action="processing_students.php" method="post">
    <img src="../img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Успешно</h3>
    <p>Профиль студента был успешно создан в базе данных!</p>
</form>
<script src="script.js"></script>
</body>
</html>
