<?php
require_once "../dbconn.php";

$message = "";
$toastClass = "";
$conn = connectToDB();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['passwd'];

    // Prepare and execute
    $stmt = $conn->prepare("SELECT password FROM userdata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if ($password === $db_password) {
            session_start();
            $_SESSION['email'] = $email;
            header("location: profile.php");
            exit();
        } else {
            $message = "Incorrect password";
        }
    } else {
        $message = "Email not found";
    }
    header("location: profile.php");
    $stmt->close();
    closeDBConnection($conn);
}
?>
<html>
<head>
    <title>Вход в Аккаунт</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/Style.css">
</head>
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
        <a href="register.php">Зарегистрироваться на сайте</a>
    </form>
</div>
</body>
</html>