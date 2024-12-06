<?php
class LoginController {
    private $model;

    public function __construct(LoginModel $model) {
        $this->model = $model;
    }

    public function loginUser(): void{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['passwd'];

            // Получаем данные пользователя по email
            $fetch_data = $this->model->getUserByEmail($email);

            if (!$fetch_data) {
                echo "Аккаунт не существует";
            } else {
                // Проверяем пароль
                $check_password = password_verify($password, $fetch_data["password"]);
                if (!$check_password) {
                    echo "Неправильный пароль";
                } else {
                    session_start();
                    $_SESSION['email'] = $email;
                    header("Location: profile.php");
                    exit();
                }
            }
        }
    }
}
?>