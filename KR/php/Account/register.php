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





<?php
//require_once "../DB_Connect/dbconn.php";
//// Функция для регистрации пользователя
//$conn = PDO_db();
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $username = $_POST['usename'];
//    $email = $_POST['mail'];
//    $password = $_POST['passwd'];
//    $rpassword = $_POST['rpasswd'];
//    // Check if email already exists
//    $checkEmailStmt = $conn->prepare("SELECT * FROM userdata WHERE email = :email");
//    $checkEmailStmt->execute([":email" => $email]);
//
//    if ($checkEmailStmt->rowCount() > 0) {
//        echo "Почта уже занята";
//    }
//    else {
//        if ($password != $rpassword) {
//            echo "Пароли не совпадают";
//        }
//        else{
//            // Prepare and bind
//            $hash = password_hash($password, PASSWORD_ARGON2I);
//            $stmt = $conn->prepare("INSERT INTO userdata (Username, email, password) VALUES (:username, :email, :hash_password)");
//            if ($stmt->execute([":username" => $username, ":email" => $email, ":hash_password" => $hash])) {
//                session_start();
//                $_SESSION['email'] = $email;
//                header("location: profile.php");
//                exit();
//            }
//            else {
//                echo("Error: ");
//            }
//        }
//    }
//}
//?>
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>Вход в Аккаунт</title>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="../css/Style.css">-->
<!--    <link rel="stylesheet" href="../css/Register.css">-->
<!--</head>-->
<!--<body id="backgroundsites">-->
<!--    <div class="RegisterForm">-->
<!--        <form method="post">-->
<!--            <div class="input-box">-->
<!--                <input type="text" name="usename" pattern="[a-zA-Z0-9]+">-->
<!--                <label>Username</label>-->
<!--            </div>-->
<!--            <div class="input-box">-->
<!--                <input type="email" name="mail">-->
<!--                <label>Email</label>-->
<!--            </div>-->
<!--            <div class="input-box">-->
<!--                <input type="password" name="passwd">-->
<!--                <label>password</label>-->
<!--            </div>-->
<!--            <div class="input-box">-->
<!--                <input type="password" name="rpasswd">-->
<!--                <label>Repeat password</label>-->
<!--            </div>-->
<!--            <div class="CenterButton">-->
<!--                <button class="SendData" type="submit">Register</button>-->
<!--            </div>-->
<!--            <a class="center" href="login.php">Войти в аккаунт</a>-->
<!--        </form>-->
<!--    </div>-->
<!--</body>-->
<!--</html>-->