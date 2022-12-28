<?php
session_start();
$surname = $_POST['Surname'];
$name = $_POST['Name'];
$patronymic = $_POST['Patronymic'];
$extent = $_POST['Extent'];
$rank = $_POST['Rank'];
$department = $_POST['Department'];
$telephone = $_POST['Telephone'];
$email = $_POST['Email'];

$connect = new mysqli('localhost', 'root', '', 'diplom');
$insert = "INSERT INTO `teachers`(`Surname`, `Name`, `Patronymic`, `Extent`, `Rank`, `Department`, `Telephone`, `Email`) VALUES ('$surname','$name','$patronymic','$extent','$rank','$department','$telephone','$email')";
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
<form action="processing_teachers.php" method="post">
    <img src="../img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Успешно</h3>
    <p>Профиль преподователя был успешно создан в базе данных!</p>
</form>
<script src="script.js"></script>
</body>
</html>
