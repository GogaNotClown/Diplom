<?php
session_start();

if (!empty($_SESSION['login'])) {
    header('location: profile.php');
} else {
    goto a;
}
a:
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление студентов</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <style>
        .other {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body class="container">
<form action="scripts/processing_students.php" method="post">
    <img src="img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Создание аккаунта студента</h3>
    <div class="inputs">
        <input name="Surname" type="text" placeholder="Фамилия">
        <input name="Name" type="text" placeholder="Имя">
        <input name="Patronymic" type="text" placeholder="Отчество">
    </div>
    <input maxlength="4" style="width: 578px;" name="offset_card_number" type="text" placeholder="Номер студенческого билета (Формат: 0000)">
    <select class="select" name="select">
        <option value="Географический">Географический</option>
        <option value="Исторический">Исторический</option>
        <option value="Геллологический">Геллологический</option>
        <option value="Химический">Химический</option>
        <option value="Биологический">Биологический</option>
        <option value="Психология">Психология</option>
        <option value="Искусство">Искусство</option>
        <option value="Филологический">Филологический</option>
        <option value="Военное обучение">Военное обучение</option>
        <option value="Экономический">Экономический</option>
    </select>
    <select class="group" name="group">
        <option value="25">25</option>
        <option value="36">36</option>
        <option value="101">101</option>
        <option value="37">37</option>
        <option value="13">13</option>
        <option value="10">10</option>
        <option value="56">56</option>
        <option value="67">67</option>
        <option value="40">40</option>
        <option value="1">1</option>
    </select>
    <button type="submit">Добавить</button>
</form>
<div class="other">
    <a target="_blank" href="students.php">
        <p class="other-text">Список студентов</p>
    </a>
    <a target="_blank" href="topics.php">
        <p class="other-text">Список тем</p>
    </a>
    <a target="_blank" href="teachers.php">
        <p class="other-text">Список преподователей</p>
    </a>
    <a target="_blank" href="diploms.php">
        <p class="other-text">Список дипломов</p>
    </a>
</div>
<div class="other">
    <a target="_blank" href="topics_form.php">
        <p style="color: #008744;" class="other-text">Добавить тему для диплома</p>
    </a>
    <a target="_blank" href="students.php">
        <p style="visibility: hidden;" class="other-text">Список студентов</p>
    </a>
    <a target="_blank" href="teachers_form.php">
        <p style="color: #008744;" class="other-text">Добавить преподователя</p>
    </a>
</div>
</body>
</html>