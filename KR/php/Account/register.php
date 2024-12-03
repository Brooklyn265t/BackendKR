<?php
require_once "../dbconn.php";
// Функция для регистрации пользователя
$message = "";
$toastClass = "";
$conn = connectToDB();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usname'];
    $email = $_POST['mail'];
    $password = $_POST['passwd'];
    $rpassword = $_POST['rpasswd'];

    // Check if email already exists
    $checkEmailStmt = $conn->prepare("SELECT email FROM userdata WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        $message = "Email ID already exists";
    } else {
        if ($password != $rpassword) {
            $message = "Пароли не совпадают";
        }
        else{
            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO userdata (Username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            if ($stmt->execute()) {
                header("location: profile.php");
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    $checkEmailStmt->close();
    closeDBConnection($conn);
}
?>

<html lang="ru">
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
                <input type="text" name="usname" pattern="[a-zA-Z0-9]+">
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
            <a href="login.php">Войти в существующий аккаунт</a>
        </form>
    </div>
</body>
</html>