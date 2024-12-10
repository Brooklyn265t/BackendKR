<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
require_once "../cookie/cookie.php";
// Инициализация класса UserSession
$userSession = new UserSession();
print_r($_SESSION);
?>
<html lang="en">
<head>
    <title>Профиль</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body id="backgroundsites">
<?php
include "../DB_Connect/dbconn.php";
// Создание соединения
$conn = PDO_db();
// Получение списка таблиц
$result1 = $conn->query("SELECT * FROM distro");
echo "<table class=infoOS>";
foreach ($result1 as $row){
    echo "<tr><td>{$row['Distro_name']}</td><td><a href='{$row['Distro_link']}'>{$row['Distro_link']}</a></td></tr>";
}
echo "</table>";

$result2 = $conn->query("SELECT * FROM osvs");
echo "<table class=infoOS>";
foreach ($result2 as $row) {
    echo "<tr><td>{$row['characteristic']}</td><td>{$row['windows']}</td><td>{$row['macos']}</td><td>{$row['linux']}</td></tr>";
}
echo "</table>";

$result3 = $conn->query("SELECT * FROM populos");
echo "<table class=infoOS>";
foreach ($result3 as $row) {
    echo "<tr><td>{$row['name']}</td><td>{$row['uses']}</td></tr>";
}
echo "</table>";


include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/LinuxMintController.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/View/LinuxMintView.php";
$pdo = PDO_db();
$controller = new LinuxMintController($pdo);
$view = new LinuxMintView($controller);
$view->showRequirements();


include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/Windows11Controller.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/View/Windows11View.php";
$pdo = PDO_db();
$controller = new Windows11Controller($pdo);
$view = new Windows11View($controller);
$view->showRequirements();


include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/GraphController.php";
include $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/GraphModel.php";
include $_SERVER["DOCUMENT_ROOT"]."/MVC/View/GraphView.php";

$conn = PDO_db(); // Функция для подключения к базе данных
$model = new GraphModel($conn);
$controller = new GraphController($model);
$view = new GraphView($controller);
$view->print(); // Вывод графика?>
?>
</body>
</html>