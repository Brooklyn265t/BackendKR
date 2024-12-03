<?php
function connectToDB() {
    $conn = new mysqli('db', 'user', 'password', 'distribution');
    if ($conn->connect_error) {
        die("Error: Connection error. " . $conn->connect_error);
    }

    return $conn;
}

// Функция для закрытия соединения с БД
function closeDBConnection($conn) {
    $conn->close();
}
?>