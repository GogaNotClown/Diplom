<?php
require_once 'scripts/connect.php';
session_start();
$error = $_GET['error'];

if (!empty($_SESSION['login'])) {
    header('location: profile.php');
} else {
    goto a;
}
a:
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в аккаунт</title>
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<section class="auth">
    <div class="container">
        <div class="auth__block">
            <h3 class="auth__text">Вход в аккаунт</h3>
            <form action="scripts/check.php" method="post" class="auth__form">
                <div class="auth__error">
                    <? if (!empty($error)):?>
                        <?=$error?><br>
                    <? endif; ?>
                </div>
                <label class="auth__field">
                    <input required placeholder="Логин" name="login" type="text" class="auth__input">
                </label>
                <label class="auth__field">
                    <input required placeholder="Пароль" name="password" type="password" class="auth__input">
                </label>
                <button class="auth__button" type="submit">Войти</button>
            </form>
        </div>
    </div>
</section>
<footer class="footer">
    <a href="reg.php">
        <p class="footer__text">Нет аккаунта?</p>
    </a>
</footer>
</body>
</html>