<?php
class Windows11Model{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function getRequirements(){
        $stmt = $this->pdo->query("SELECT * FROM Windows11_Characteristics");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDistroLink(){
        $stmt = $this->pdo->query("SELECT Distro_link FROM distro WHERE Distro_name = 'Windows11'");
        return $stmt->fetchColumn();
    }
}
?>
