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
<body id="background">
<?php
include "../DB_Connect/dbconn.php";

// Создание соединения
$conn = PDO_db();
// Получение списка таблиц
$result = $conn->query("SELECT * FROM distro");
echo "<table>";
foreach ($result as $row) {
    echo "<tr><td>{$row['Distro_name']}</td><td>{$row['Distro_link']}</td></tr>";
}
echo "</table>";

$result = $conn->query("SELECT * FROM osvs");
echo "<table>";
foreach ($result as $row) {
    echo "<tr><td>{$row['characteristic']}</td><td>{$row['windows']}</td><td>{$row['macos']}</td><td>{$row['linux']}</td></tr>";
}
echo "</table>";

$result = $conn->query("SELECT * FROM populos");
echo "<table>";
foreach ($result as $row) {
    echo "<tr><td>{$row['name']}</td><td>{$row['uses']}</td></tr>";
}
echo "</table>";

?>
</body>
</html>