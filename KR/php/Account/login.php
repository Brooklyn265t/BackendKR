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

<?php
//require_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
//$conn = PDO_db();
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $email = $_POST['email'];
//    $password = $_POST['passwd'];
//
//    // Prepare and execute
//    $stmt = $conn->prepare("SELECT * FROM userdata WHERE email = :email");
//    $stmt->execute([":email" => $email]);
//    $fetch_data = $stmt->fetchAll();
//    if ($fetch_data == 0) {
//        echo "Аккаунт не существует";
//    }
//    else{
//        $fetch_password = $fetch_data[0];
//        $check_password = password_verify($password, $fetch_password["password"]);
//        if (!$check_password) {
//            echo "Неправильный пароль";
//        }
//        else {
//            session_start();
//            $_SESSION['email'] = $email;
//            header("location: profile.php");
//            exit();
//        }
//    }
//}
//?>
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>Вход в Аккаунт</title>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="../css/login.css">-->
<!--    <link rel="stylesheet" href="../css/Style.css">-->
<!--</head>-->
<!--<body id="backgroundsites">-->
<!--<div class="LoginForm">-->
<!--    <form method="post">-->
<!--        <div class="input-box">-->
<!--            <input type="email" name="email">-->
<!--            <label>Email</label>-->
<!--        </div>-->
<!--        <div class="input-box">-->
<!--            <input type="password" name="passwd">-->
<!--            <label>Password</label>-->
<!--        </div>-->
<!--        <div class="CenterButton">-->
<!--            <button class="SendData" type="submit">Login</button>-->
<!--        </div>-->
<!--        <a class="center" href="register.php">Зарегистрироваться</a>-->
<!--    </form>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->