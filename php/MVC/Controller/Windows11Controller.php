<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/Windows11Model.php";
class Windows11Controller{
    private $model;
    public function __construct($pdo){
        $this->model = new Windows11Model($pdo);
    }
    public function show(){
        $requirements = $this->model->getRequirements();
        $distroLink = $this->model->getDistroLink();
        return [$requirements, $distroLink];
    }
}
?>