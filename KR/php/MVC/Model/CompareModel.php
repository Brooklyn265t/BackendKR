<?php
class CompareModel{
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function getData() {
        $stmt = $this->conn->query("SELECT * FROM osvs");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

}