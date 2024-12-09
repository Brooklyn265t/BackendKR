<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/RegisterModel.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/RegisterController.php";
include $_SERVER["DOCUMENT_ROOT"]."/MVC/View/RegisterView.php";
$conn = PDO_db();
$model = new RegisterModel($conn);
$controller = new RegisterController($model);
$view = new RegisterView($controller);
$view->showRegisterForm();
?>