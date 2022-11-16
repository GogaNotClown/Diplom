<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление тем для диплома</title>
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
<form action="scripts/processing_topics.php" method="post">
    <img src="img/logo.svg" alt="Logo" class="logo">
    <h3 class="form-title">Добавление тем для диплома</h3>
    <div class="inputs">
        <input style="width: 365px;" name="Topic" type="text" placeholder="Название темы">
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
    <a target="_blank" href="teachers_form.php">
        <p style="color: #008744;" class="other-text">Добавить преподователя</p>
    </a>
</div>
</body>
</html>