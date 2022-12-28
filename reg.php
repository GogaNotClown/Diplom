<?php
require_once 'scripts/connect.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<section class="auth">
    <div class="container">
        <div class="auth__block">
            <h3 class="auth__text">Регистрация</h3>
            <form action="scripts/add_user.php" method="post" class="auth__form">
                <label class="auth__field">
                    <input required placeholder="Логин" name="login" type="text" class="auth__input">
                </label>
                <label class="auth__field">
                    <input required placeholder="Пароль" name="password" type="password" class="auth__input">
                </label>
                <button class="auth__button" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</section>
<footer class="footer">
    <a href="login.php">
        <p class="footer__text">Есть аккаунт?</p>
    </a>
</footer>
</body>
</html>
