<?php
class UserSession {
    private $redis;
    private $key = 'user_session';
    public function __construct() {
        // Получаем email пользователя из формы логина/регистрации
        $this->user_email = $_SESSION['email'] ?? '';
        // Проверяем, есть ли активная сессия
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $this->saveToSession();
        $this->setCookies();
        $this->saveToRedis();
    }
    private function setCookies() {
        setcookie(
            'user_session',
            $this->user_email,
            time() + 60 * 60, // 1 час
            '/',
            '',
            true, // HttpOnly
            true // Secure
        );
    }
    private function saveToSession() {
        $_SESSION['email'] = $this->user_email;
    }
    public function getUserEmailFromCookie() {
        if (isset($_COOKIE['user_session'])) {
            return $_COOKIE['user_session'];
        }
        return null;
    }
    public function getUserEmailFromRedis() {
        $this->redis = new Redis();
        try {
            $this->redis->connect('localhost', 6379);
            $email = $this->redis->get($this->key . ':email');
        } catch (Exception $e) {
            error_log("Redis connection error: " . $e->getMessage());
            return null;
        } finally {
            $this->redis->close();
        }
        return $email;
    }
    private function saveToRedis() {
        $this->redis = new Redis();
        try {
            $this->redis->connect('localhost', 6379);
            $this->redis->setex($this->key . ':email', 3600, $this->user_email);
        } catch (Exception $e) {
            error_log("Redis connection error: " . $e->getMessage());
        } finally {
            $this->redis->close();
        }
    }
}
?>