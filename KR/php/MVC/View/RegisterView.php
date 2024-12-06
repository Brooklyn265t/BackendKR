<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/RegisterModel.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/RegisterController.php";
class RegisterView{
    private $controller;

    public function __construct($controller){
        $this->controller = $controller;
    }
    public function showRegisterForm(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->controller->registerUser();
        }
        echo <<< _HTML
                <html lang="en">
                    <head>
                        <title>Вход в Аккаунт</title>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="../css/Style.css">
                        <link rel="stylesheet" href="../css/Register.css">
                    </head>
                    <body id="backgroundsites">
                    <div class="RegisterForm">
                        <form method="post">
                            <div class="input-box">
                                <input type="text" name="usename" pattern="[a-zA-Z0-9]+">
                                <label>Username</label>
                            </div>
                            <div class="input-box">
                                <input type="email" name="mail">
                                <label>Email</label>
                            </div>
                            <div class="input-box">
                                <input type="password" name="passwd">
                                <label>password</label>
                            </div>
                            <div class="input-box">
                                <input type="password" name="rpasswd">
                                <label>Repeat password</label>
                            </div>
                            <div class="CenterButton">
                                <button class="SendData" type="submit">Register</button>
                            </div>
                            <a class="center" href="login.php">Войти в аккаунт</a>
                        </form>
                    </div>
                    </body>
                </html>
        _HTML;
    }
}
?>