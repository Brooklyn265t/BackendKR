<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
class GraphModel{
    private $conn;
    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }
    public function getUses() {
        $stmt = $this->conn->query("SELECT uses FROM populos");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
    public function getNames() {
        $stmt = $this->conn->query("SELECT name FROM populos");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
?>