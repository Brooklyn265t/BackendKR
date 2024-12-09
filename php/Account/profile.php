<?php
// Check if the user is logged in, if
// not then redirect them to the login page
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<html lang="en">
<head>
    <title>Вход в Аккаунт</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
echo "<table>";
foreach ($result1 as $row){
    echo "<tr><td>{$row['Distro_name']}</td><td><a href='{$row['Distro_link']}'>{$row['Distro_link']}</a></td></tr>";
}
echo "</table>";

$result2 = $conn->query("SELECT * FROM osvs");
echo "<table>";
foreach ($result2 as $row) {
    echo "<tr><td>{$row['characteristic']}</td><td>{$row['windows']}</td><td>{$row['macos']}</td><td>{$row['linux']}</td></tr>";
}
echo "</table>";

$result3 = $conn->query("SELECT * FROM populos");
echo "<table>";
foreach ($result3 as $row) {
    echo "<tr><td>{$row['name']}</td><td>{$row['uses']}</td></tr>";
}
echo "</table>";
?>
</body>
</html>