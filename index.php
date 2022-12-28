<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <style>
        * {
            font-family: "Google Sans", sans-serif;
        }
    </style>
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo.svg" alt="Logo">
        </a>
    </div>
</nav>
<div class="text-center mt-5 py-5">
    <img class="d-block mx-auto mb-4" src="img/logo.svg" alt="" width="72" height="57">
    <h1 class="display-6 fw-bold">Система хранения</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Добавляйте, удаляйте, редактируете <br> и просматриваете нужную вам информацию</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="login.php">
                <button type="button" class="btn btn-success btn-lg px-4 gap-3">Войти</button>
            </a>
            <a href="reg.php">
                <button type="button" class="btn btn-danger btn-lg px-4">Зарегистрироваться</button>
            </a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>