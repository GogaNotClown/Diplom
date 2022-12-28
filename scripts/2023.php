<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дипломы за 2023 год</title>
    <link rel="stylesheet" href="../css/diploms.css">
    <link rel="icon" href="../img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.svg" alt="Logo">
        </a>
        <nav>
            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="2020.php">2020</a></li>
                <li class="page-item"><a class="page-link" href="2021.php">2021</a></li>
                <li class="page-item"><a class="page-link" href="2022.php">2022</a></li>
                <li class="page-item active"><a class="page-link" href="#">2023</a></li>
            </ul>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../img/logo.svg" alt="Logo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="../students.php">Список студентов</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../teachers.php">Список преподователей</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../topics.php">Список тем</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Список дипломов</a>
                    </li>
                    <?php
                    if ($_SESSION['login'] == 'admin'):?>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin.php">Админ панель</a>
                        </li>
                    <? endif;?>
                    <?php
                    if ($_SESSION['login']):?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Выйти</a>
                        </li>
                    <? endif;?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php
$connect = new mysqli('localhost', 'root', '', 'diplom');
$select = "SELECT teachers.Surname as tsm, diploms.date_topic, students.Surname, topic_list.tl_title, YEAR(date_topic) as year
           FROM `diploms` 
           join `students` on diploms.student_id=students.student_id 
           join `teachers` on diploms.teacher_id=teachers.teacher_id
           join `topic_list` on diploms.tl_id=topic_list.tl_id
			where YEAR(date_topic) = 2023";
$result = $connect -> query($select) -> fetch_all(MYSQLI_ASSOC);

echo "<div style='max-width: 1500px; margin: 150px auto 50px;display: flex; flex-wrap: wrap; gap: 75px;'>";
foreach ($result as $row) {
    echo "<div class='card'>";
    echo "<p name='tl_title' class='name'><span>Название темы: </span> " . $row['tl_title'] . "<br></p>";
    echo "<p name='teacher_name' class='patronymic'><span>Имя преподователя: </span> " . $row['tsm'] . "<br></p>";
    echo "<p name='date_topic' class='patronymic'><span>Год темы: </span> " . $row['year'] . "<br></p>";
    echo "<p name='student_name' class='patronymic'><span>Имя студента: </span> " . $row['Surname'] . "<br></p>";
    echo "</div>";
}
echo "</div>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>