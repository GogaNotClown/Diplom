<?php
require_once 'connect.php';

$tl_id = $_REQUEST['tl_id'];

$insert = "DELETE FROM `topic_list` WHERE tl_id='$tl_id' LIMIT 1";
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
<form action="del_topics.php" method="post">
    <img src="../img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Успешно</h3>
    <p>Тема для дипломов была успешно удалена!</p>
</form>
<script src="script.js"></script>
</body>
</html>
