<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Студенты</title>
    <link rel="stylesheet" href="css/students.css">
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="#">Список студентов</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teachers.php">Список преподователей</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="topics.php">Список тем</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Формы на добавление
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Добавить студента</a></li>
                            <li><a class="dropdown-item" href="teachers_form.php">Добавить преподователя</a></li>
                            <li><a class="dropdown-item" href="topics_form.php">Добавить тему</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php
$connect = new mysqli('localhost', 'root', '', 'diplom');
$select_students = "SELECT * FROM `students`";
$result = $connect -> query($select_students) -> fetch_all(MYSQLI_ASSOC);

echo "<div style='max-width: 1500px; margin: 150px auto 50px;display: flex; flex-wrap: wrap; gap: 75px;'>";
foreach ($result as $row) {
    echo "<div class='card'>";
    echo "<img class='logo' src='img/logo.svg' alt='logo'>";
    echo "<p class='surname'><span>Фамилия: </span> " . $row['Surname'] . "<br></p>";
    echo "<p class='name'><span>Имя: </span> " . $row['Name'] . "<br></p>";
    echo "<p class='patronymic'><span>Отчество: </span> " . $row['Patronymic'] . "<br></p>";
    echo "<div class='other'>";
    echo "<p class='number'><span>Номер студенческого билета: </span> " . $row['offset_card_number'] . "<br></p>";
    echo "<p class='faculty'><span>Факультет: </span> " . $row['Faculty'] . "<br></p>";
    echo "<p class='group'><span>Группа: </span> " . $row['Group'] . "<br></p>";
    echo "</div>";
    echo "<button class='ban'>Отчислить</button>";
    echo "</div>";
}
echo "</div>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>