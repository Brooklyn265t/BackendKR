<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/LinuxMintModel.php";

class LinuxMintController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new LinuxMintModel($pdo);
    }

    public function show()
    {
        $requirements = $this->model->getRequirements();
        $distroLink = $this->model->getDistroLink();
        return [$requirements, $distroLink];
    }
}
?>