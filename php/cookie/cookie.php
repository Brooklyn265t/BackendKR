<?php
class UserSession {
    private $redis;
    private $key = 'user_session';

    public function __construct() {
        // Запускаем сессию
        session_start();
        $this->saveToSession();
        $this->setCookies();
        $this->saveToRedis();
    }

    private function saveToSession() {
        $_SESSION['user_ip'] = $this->user_ip;
        $_SESSION['user_language'] = $this->user_language;
    }

    private function setCookies() {
        setcookie('user_ip', $this->user_ip, time() + (2 * 60 * 60), "/");
        setcookie('user_language', $this->user_language, time() + (2 * 60 * 60), "/");
    }

    private function saveToRedis() {
        $redis = new Redis();
        $redis->connect('localhost', 6379);

        $redis->set($this->key . ':ip', $this->user_ip);
        $redis->set($this->key . ':language', $this->user_language);

        $redis->close();
    }

    public function getUserIPFromRedis() {
        $redis = new Redis();
        $redis->connect('localhost', 6379);

        $ip = $redis->get($this->key . ':ip');
        $language = $redis->get($this->key . ':language');

        $redis->close();

        return array('ip' => $ip, 'language' => $language);
    }
}
?>
