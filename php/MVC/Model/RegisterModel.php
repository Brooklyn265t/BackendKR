<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
class RegisterModel {
    private $conn;
    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }
    public function getEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM userdata WHERE email = :email");
        $stmt->execute([":email" => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function createUser($username, $email, $password) {
        $stmt = $this->conn->prepare("INSERT INTO userdata (Username, email, password) VALUES (:username, :email, :hash_password)");
        $stmt->execute([":username" => $username, ":email" => $email, ":hash_password" => password_hash($password, PASSWORD_DEFAULT)]);
        return $this->conn->lastInsertId();
    }
}
?>