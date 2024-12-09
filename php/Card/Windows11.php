<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/Windows11Controller.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/View/Windows11View.php";
$pdo = PDO_db();
$controller = new Windows11Controller($pdo);
$view = new Windows11View($controller);
$view->showRequirements();
?>
