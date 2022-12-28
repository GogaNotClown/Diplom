<?php
require_once 'connect.php';

$tl_id = $_REQUEST['tl_id'];
$tl_title = $_REQUEST['Topic'];

$insert = "UPDATE `topic_list` SET `tl_title`='$tl_title' WHERE tl_id='$tl_id' LIMIT 1";
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
<form action="red_topics.php" method="post">
    <img src="../img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Успешно</h3>
    <p>Данные темы были успешно обновлены!</p>
</form>
<script src="script.js"></script>
</body>
</html>
