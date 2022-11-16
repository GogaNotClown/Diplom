<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление преподователя</title>
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
<form action="scripts/processing_teachers.php" method="post">
    <img src="img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Создание аккаунта преподователя</h3>
    <div class="inputs">
        <input name="Surname" type="text" placeholder="Фамилия">
        <input name="Name" type="text" placeholder="Имя">
        <input name="Patronymic" type="text" placeholder="Отчество">
    </div>
    <select class="select" name="Extent">
        <option value="Доцент">Доцент</option>
        <option value="Профессор">Профессор</option>
    </select>
    <select class="select" name="Rank">
        <option value="Доцент">Доцент</option>
        <option value="Профессор">Профессор</option>
        <option value="Преподователь">Преподователь</option>
        <option value="Доцент и профессор">Доцент и профессор</option>
    </select>
    <select class="select" name="Department">
        <option value="Бакалавриат">Бакалавриат</option>
        <option value="Специалитет">Специалитет</option>
        <option value="Магистратура">Магистратура</option>
    </select>
    <div class="inputs">
        <input pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="18" maxlength="18" type="tel" name="Telephone" placeholder="+7 (880) 555-35-35">
        <input pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(?:\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@(?:[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(?:aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$" style="width: 381px;" type="email" name="Email" placeholder="name@...">
    </div>
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
</div>
<div class="other">
    <a target="_blank" href="index.php">
        <p style="color: #008744;" class="other-text">Добавить студента</p>
    </a>
    <a target="_blank" href="teachers.php">
        <p style="visibility: hidden;" class="other-text">Список преподователей</p>
    </a>
    <a target="_blank" href="topics_form.php">
        <p style="color: #008744;" class="other-text">Добавить тему для диплома</p>
    </a>
</div>
</body>
</html>