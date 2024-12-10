<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/LoginModel.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/LoginController.php";
class LoginView{
    private $controller;
    public function __construct($controller){
        $this->controller = $controller;
    }
    public function showLoginForm(): void{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->controller->loginUser();
        }
        echo <<< _HTML
            <html lang="en">
                <head>
                    <title>Вход в Аккаунт</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="../../css/Style.css">
                    <link rel="stylesheet" href="../../css/burger.css">
                    <link rel="stylesheet" href="../../css/login.css">
                </head>
                <header>
                    <input type="checkbox" id="burger-check">
                    <label class="burger" for="burger-check">
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                    </label>
                        <nav class = "menupos">
                        <ul>
                            <li><a href="Card/AllCard.php">Операционные системы</a></li>
                            <li><a href="../../index.php">Главная страница</a></li>
                        </ul>
                    </nav>
                </header>
                    <body id="backgroundsites">
                    <div class="LoginForm">
                        <form method="post">
                            <div class="input-box">
                                <input type="email" name="email">
                                <label>Email</label>
                            </div>
                            <div class="input-box">
                                <input type="password" name="passwd">
                                <label>Password</label>
                            </div>
                            <div class="CenterButton">
                                <button class="SendData" type="submit">Login</button>
                            </div>
                            <div>
                                <a class="center" href="../../Account/register.php">Зарегистрироваться</a>
                            </div>
                        </form>
                    </div>
                    </body>
                    </html>
            _HTML;
    }
}
?>