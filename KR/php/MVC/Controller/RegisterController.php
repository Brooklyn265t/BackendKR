<?php
session_start();
class RegisterController {
    private $model;

    public function __construct(RegisterModel $model) {
        $this->model = $model;
    }

    public function registerUser(): void{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['usename'];
            $email = $_POST['mail'];
            $password = $_POST['passwd'];
            $rpassword = $_POST['rpasswd'];

            // Check if email already exists
            $checkEmailStmt = $this->model->getEmail($email);
            if ($checkEmailStmt) { // Check if a user was found
                echo "Почта уже занята";
            } else {
                if ($password != $rpassword) {
                    echo "Пароли не совпадают";
                } else {
                    $stmt = $this->model->createUser($username, $email, $password);
                    if ($stmt) {
                        $_SESSION['email'] = $email;
                        header("location: profile.php");
                        exit();
                    } else {
                        echo("Error: ");
                    }
                }
            }
        }
    }
}
?>