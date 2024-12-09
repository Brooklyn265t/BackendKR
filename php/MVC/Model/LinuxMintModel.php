<?php
class LinuxMintModel{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getRequirements()
    {
        $stmt = $this->pdo->query("SELECT * FROM Linux_Characteristics WHERE distribution = 'Linux Mint'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDistroLink()
    {
        $stmt = $this->pdo->query("SELECT Distro_link FROM distro WHERE Distro_name = 'Mint'");
        return $stmt->fetchColumn();
    }
}
?>