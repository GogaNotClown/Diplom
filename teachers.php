<?php
session_start();
require_once 'scripts/connect.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Преподователи</title>
    <link rel="stylesheet" href="css/teachers.css">
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo.svg" alt="Logo">
        </a>
        <form action="teachers.php" method="get" class="d-flex" role="search">
            <input name="search" type="search" class="form-control" id="inputModalSearch" placeholder="Поиск...">
            <button type="submit" class="input-group-text bg-success text-light">
                <i class="fa fa-fw fa-search text-white"></i>
            </button>
        </form>
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
                        <a class="nav-link active" aria-current="page" href="#">Список преподователей</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="topics.php">Список тем</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diploms.php">Список дипломов</a>
                    </li>
                    <?php
                    if ($_SESSION['login'] == 'admin'):?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Админ панель</a>
                        </li>
                    <? endif;?>
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
<?php
$search = $_GET['search'];

if (isset($search)) {
    $select = "SELECT * FROM `teachers` WHERE `Surname` LIKE '%$search%'";
    $result = $connect -> query($select) -> fetch_all(MYSQLI_ASSOC);
} else {
    $select = "SELECT * FROM teachers";
    $result = $connect -> query($select) -> fetch_all(MYSQLI_ASSOC);
}

echo "<div style='max-width: 1500px; margin: 150px auto 50px;display: flex; flex-wrap: wrap; gap: 75px;'>";
foreach ($result as $row) {
    echo "<div class='card'>";
    echo "<img class='logo' src='img/logo.svg' alt='logo'>";
    echo "<p name='Surname' class='surname'><span>Фамилия: </span> " . $row['Surname'] . "<br></p>";
    echo "<p name='Name' class='name'><span>Имя: </span> " . $row['Name'] . "<br></p>";
    echo "<p name='Patronymic' class='patronymic'><span>Отчество: </span> " . $row['Patronymic'] . "<br></p>";
    echo "<div class='other'>";
    echo "<p name='Extent' class='extent'><span>Степень: </span> " . $row['Extent'] . "<br></p>";
    echo "<p name='Rank' class='rank'><span>Звание: </span> " . $row['Rank'] . "<br></p>";
    echo "<p name='Department' class='rank'><span>Кафедра: </span> " . $row['Department'] . "<br></p>";
    echo "<p name='Telephone' class='telephone'><span>Номер телефона: </span> " . $row['Telephone'] . "<br></p>";
    echo "<p name='Email' class='email'><span>Почта: </span> " . $row['Email'] . "<br></p>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>