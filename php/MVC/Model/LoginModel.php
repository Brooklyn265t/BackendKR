<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";

class LoginModel {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function getUserByEmail($email) {
        // Подготовка SQL-запроса с параметром
        $stmt = $this->conn->prepare("SELECT * FROM userdata WHERE email = :email");
        // Выполнение запроса с передачей параметра
        $stmt->execute([':email' => $email]);
        // Возвращаем ассоциативный массив с данными пользователя
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
