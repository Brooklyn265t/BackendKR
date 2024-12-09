<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/LinuxMintController.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/View/LinuxMintView.php";
$pdo = PDO_db();
$controller = new LinuxMintController($pdo);
$view = new LinuxMintView($controller);
$view->showRequirements();
?>
