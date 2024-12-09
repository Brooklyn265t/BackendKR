<?php
const host = 'db'; // Имя сервиса в docker-compose
const port = '3306'; // Порт MySQL (в вашем docker-compose.yml)
const dbname = 'distribution'; // Имя базы данных
const user = 'user'; // Имя пользователя
const password = 'password'; // Пароль
function PDO_db(): PDO{
    try{
        $db = new PDO("mysql:host=".host.";port=".port.";dbname=".dbname, user, password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
        return $db;
    }
    catch (PDOException $e){ //
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}
?>