<?php
$directory = __DIR__; // Получаем текущую директорию

// Проверяем, существует ли директория
if (is_dir($directory)) {
    // Открываем директорию
    if ($handle = opendir($directory)) {
        echo "<h1>Список карточек:</h1>";
        echo "<ul>";

        // Читаем содержимое директории
        while (false !== ($file = readdir($handle))) {
            // Проверяем, является ли файл PHP файлом и не является ли это текущей или родительской директорией
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php' && $file !== 'AllCard.php') {
                // Создаем ссылку на файл
                echo "<li><a href=\"$file\">$file</a></li>";
            }
        }

        echo "</ul>";
        closedir($handle); // Закрываем директорию
    } else {
        echo "Не удалось открыть директорию.";
    }
} else {
    echo "Указанная директория не существует.";
}
?>