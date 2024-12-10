<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/GraphModel.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/GraphController.php";
class GraphView {
    private $controller;
    public function __construct($controller) {
        $this->controller = $controller;
    }
    public function print(): void {
        echo "<img src='data:image/png;base64," . $this->controller->bar() . "'>";
    }
}
?>