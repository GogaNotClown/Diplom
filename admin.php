<?php
session_start();
require_once 'scripts/connect.php';

$zapros = "SELECT * FROM `users`";

if (!($_SESSION['login'] == 'admin')) {
    header('location: profile.php');
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
    <style>
        * {
            font-family: 'Google Sans', sans-serif;
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
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.svg" alt="Logo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="students.php">Список студентов</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teachers.php">Список преподователей</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="topics.php">Список тем</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diploms.php">Список дипломов</a>
                    </li>
                    <?php
                    if ($_SESSION['login']):?>
                        <li class="nav-item">
                            <a class="nav-link" href="scripts/logout.php">Выйти</a>
                        </li>
                    <? endif;?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<main style="margin-top: 150px;" class="container">
    <p class="fs-2">Админ панель, <b><?=$_SESSION['login']?></b></p>
    <p class="fs-4">В этом профиле вы сможете добавлять, редактировать и удалять записи напрямую из базы данных</p>
    <div class="accordion mt-5 mb-5" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Добавление студента
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/processing_students.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Создание аккаунта студента</h3>
                            <input style="width: 578px;" class="form-control mb-3" name="Surname" type="text" placeholder="Фамилия">
                            <input style="width: 578px;" class="form-control mb-3" name="Name" type="text" placeholder="Имя">
                            <input style="width: 578px;" class="form-control mb-3" name="Patronymic" type="text" placeholder="Отчество">
                        <input class="form-control mb-3" maxlength="4" style="width: 578px;" name="offset_card_number" type="text" placeholder="Номер студенческого билета (Формат: 0000)">
                        <select style="width: 578px;" class="form-control mb-3" name="select">
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
                        <select style="width: 578px;" class="form-control mb-3" name="group">
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
                        <button class="btn btn-success" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Добавление преподователя
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/processing_teachers.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Создание аккаунта преподователя</h3>
                            <input style="width: 578px;" class="form-control mb-3" name="Surname" type="text" placeholder="Фамилия">
                            <input style="width: 578px;" class="form-control mb-3" name="Name" type="text" placeholder="Имя">
                            <input style="width: 578px;" class="form-control mb-3" name="Patronymic" type="text" placeholder="Отчество">
                        <select style="width: 578px;" class="form-control mb-3" class="select" name="Extent">
                            <option value="Доцент">Доцент</option>
                            <option value="Профессор">Профессор</option>
                        </select>
                        <select style="width: 578px;" class="form-control mb-3" class="select" name="Rank">
                            <option value="Доцент">Доцент</option>
                            <option value="Профессор">Профессор</option>
                            <option value="Преподователь">Преподователь</option>
                            <option value="Доцент и профессор">Доцент и профессор</option>
                        </select>
                        <select style="width: 578px;" class="form-control mb-3" class="select" name="Department">
                            <option value="Бакалавриат">Бакалавриат</option>
                            <option value="Специалитет">Специалитет</option>
                            <option value="Магистратура">Магистратура</option>
                        </select>
                        <div class="inputs">
                            <input style="width: 578px;" class="form-control mb-3" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="18" maxlength="18" type="tel" name="Telephone" placeholder="+7 (880) 555-35-35">
                            <input style="width: 578px;" class="form-control mb-3" pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(?:\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@(?:[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(?:aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$" type="email" name="Email" placeholder="name@...">
                        </div>
                        <button class="btn btn-success" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Добавление темы для диплома
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/processing_topics.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Добавление тем для диплома</h3>
                            <input class="form-control mb-3" style="width: 365px;" name="Topic" type="text" placeholder="Название темы">
                        <button class="btn btn-success" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Редактирование студента
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/red_students.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Редактирование аккаунта студента</h3>
                        <input style="width: 578px;" placeholder="ID Студента" class="form-control mb-3" type="text" name="student_id">
                        <input style="width: 578px;" class="form-control mb-3" name="Surname" type="text" placeholder="Фамилия">
                        <input style="width: 578px;" class="form-control mb-3" name="Name" type="text" placeholder="Имя">
                        <input style="width: 578px;" class="form-control mb-3" name="Patronymic" type="text" placeholder="Отчество">
                        <input class="form-control mb-3" maxlength="4" style="width: 578px;" name="offset_card_number" type="text" placeholder="Номер студенческого билета (Формат: 0000)">
                        <select style="width: 578px;" class="form-control mb-3" name="Faculty">
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
                        <select style="width: 578px;" class="form-control mb-3" name="Group">
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
                        <button class="btn btn-danger" type="submit">Редактировать</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Редактирование преподователя
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/red_teacher.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Редактирование преподователя</h3>
                        <input style="width: 578px;" placeholder="ID Преподователя" class="form-control mb-3" type="text" name="teacher_id">
                        <input style="width: 578px;" class="form-control mb-3" name="Surname" type="text" placeholder="Фамилия">
                        <input style="width: 578px;" class="form-control mb-3" name="Name" type="text" placeholder="Имя">
                        <input style="width: 578px;" class="form-control mb-3" name="Patronymic" type="text" placeholder="Отчество">
                        <select style="width: 578px;" class="form-control mb-3" class="select" name="Extent">
                            <option value="Доцент">Доцент</option>
                            <option value="Профессор">Профессор</option>
                        </select>
                        <select style="width: 578px;" class="form-control mb-3" class="select" name="Rank">
                            <option value="Доцент">Доцент</option>
                            <option value="Профессор">Профессор</option>
                            <option value="Преподователь">Преподователь</option>
                            <option value="Доцент и профессор">Доцент и профессор</option>
                        </select>
                        <select style="width: 578px;" class="form-control mb-3" class="select" name="Department">
                            <option value="Бакалавриат">Бакалавриат</option>
                            <option value="Специалитет">Специалитет</option>
                            <option value="Магистратура">Магистратура</option>
                        </select>
                        <div class="inputs">
                            <input style="width: 578px;" class="form-control mb-3" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="18" maxlength="18" type="tel" name="Telephone" placeholder="+7 (880) 555-35-35">
                            <input style="width: 578px;" class="form-control mb-3" pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(?:\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@(?:[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(?:aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$" type="email" name="Email" placeholder="name@...">
                        </div>
                        <button class="btn btn-danger" type="submit">Редактировать</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Редактирование темы для диплома
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/red_topics.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Редактирование тем для диплома</h3>
                        <input class="form-control mb-3" style="width: 365px;" name="tl_id" type="text" placeholder="ID Темы">
                        <input class="form-control mb-3" style="width: 365px;" name="Topic" type="text" placeholder="Название темы">
                        <button class="btn btn-danger" type="submit">Редактировать</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Удаление студента
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/del_students.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Удаление аккаунта студента</h3>
                        <input style="width: 578px;" placeholder="ID Студента" class="form-control mb-3" type="text" name="student_id">
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Удаление преподователя
                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/del_teachers.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Удаление аккаунта преподователя</h3>
                        <input style="width: 578px;" placeholder="ID Преподователя" class="form-control mb-3" type="text" name="teacher_id">
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Удаление тем для дипломов
                </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/del_topics.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Удаление тем для дипломов</h3>
                        <input style="width: 578px;" placeholder="ID Темы" class="form-control mb-3" type="text" name="tl_id">
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Внимание!</h4>
        <p>Дальше можно сотворить ужасные вещи!</p>
        <hr>
        <p class="mb-0">Будьте осторожнее!</p>
    </div>
    <div class="accordion mt-5 mb-5" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    Удаление пользователя
                </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="scripts/del_users.php" method="post">
                        <img src="img/logo.svg" alt="Logo" class="logo">
                        <h3 style="margin: 20px 0 20px;" class="fs-4">Удаление пользователя</h3>
                        <input style="width: 578px;" placeholder="ID Пользователя" class="form-control mb-3" type="text" name="user_id">
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    $result = $connect -> query($zapros);
    if ($result->num_rows > 0) {
        echo "<table id='example' class='table table-dark table-striped' style='width=100%'>";
        echo "<thead>";
        echo "<tr class='table-dark'>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>Логин</th>";
        echo "<th scope='col'>Пароль</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["user_id"]
                . "</td><td>" . $row["login"]
                . "</td><td>" . password_hash($row["password"], PASSWORD_DEFAULT)
                . "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";

    } else { echo "Нет результатов"; }
    ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
