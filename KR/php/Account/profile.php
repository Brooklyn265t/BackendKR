<?php
include "../dbconn.php";
// Проверка, вошел ли пользователь
session_start();
// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Создание соединения
$conn = connectToDB();

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение списка таблиц
$result = $conn->query("SELECT * FROM distro");
echo "<table>";
foreach ($result as $row){
    echo "<tr><td>{$row['Distro_name']}</td><td>{$row['Distro_link']}</td></tr>";
}
echo "</table>";

$result = $conn->query("SELECT * FROM osvs");
echo "<table>";
foreach ($result as $row){
    echo "<tr><td>{$row['characteristic']}</td><td>{$row['windows']}</td><td>{$row['macos']}</td><td>{$row['linux']}</td></tr>";
}
echo "</table>";

$result = $conn->query("SELECT * FROM populos");
echo "<table>";
foreach ($result as $row){
    echo "<tr><td>{$row['name']}</td><td>{$row['uses']}</td></tr>";
}
echo "</table>";

// Закрытие соединения
$conn->close();
?>