<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/LoginModel.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/LoginController.php";
include $_SERVER["DOCUMENT_ROOT"]."/MVC/View/LoginView.php";
$conn = PDO_db();
$model = new LoginModel($conn);
$controller = new LoginController($model);
$view = new LoginView($controller);
$view->showLoginForm();
?>