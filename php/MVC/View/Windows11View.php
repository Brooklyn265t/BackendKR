<?php
class Windows11View
{
    private $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function showRequirements(): void
    {
        list($requirements, $distroLink) = $this->controller->show();

        echo <<< _HTML
            <html lang="ru">
                <head>
                    <title>Windows 11</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="../../css/Style.css">
                    <link rel="stylesheet" href="../../css/index.css">
                    <link rel="stylesheet" href="../../css/CardList.css">
                    <link rel="stylesheet" href="../../css/burger.css">
                </head>
                <header>
                    <input type="checkbox" id="burger-check">
                    <label id="burger" for="burger-check">
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                    </label>
                        <nav class = "menupos">
                        <ul>
                            <li><a href="Card/AllCard.php">Операционные системы</a></li>
                            <li><a href="Account/register.php">Вход</a></li>
                        </ul>
                    </nav>
                </header>
                <body id="backgroundsites">
                <div class="InfoOS">
                    <h1>Справочник по Windows 11</h1>
                    <p>Windows 11 — это последняя версия операционной системы от Microsoft, выпущенная в октябре 2021 года. Она предлагает множество новых функций и улучшений по сравнению с предыдущими версиями.</p>
                
                    <h2>Основные функции Windows 11:</h2>
                    <ul>
                        <li>Обновленный интерфейс пользователя с центром задач и новыми значками.</li>
                        <li>Поддержка приложений Android через Microsoft Store.</li>
                        <li>Улучшенная производительность и оптимизация для игр.</li>
                        <li>Интеграция с Microsoft Teams для удобного общения.</li>
                        <li>Новые возможности для многозадачности, включая Snap Layouts и Snap Groups.</li>
                    </ul>

                    <h2>Как обновить до Windows 11:</h2>
                    <p>Чтобы обновить до Windows 11, убедитесь, что ваше устройство соответствует системным требованиям, и используйте Windows Update для загрузки и установки новой версии.</p>

                    <h1>Системные требования Windows 11</h1>
                    <table border="1">
                        <tr class="info">
                            <th>Тип требования</th>
                            <th>Процессор</th>
                            <th>Оперативная память</th>
                            <th>Хранилище</th>
                            <th>Прошивка</th>
                            <th>TPM</th>
                            <th>Графическая карта</th>
                            <th>Дисплей</th>
                            <th>Интернет-соединение</th>
                            <th>Дополнительные функции</th>
                        </tr>
        _HTML;

        foreach ($requirements as $requirement) {
            echo <<< _HTML
                            <tr class="info">
                                <td>{$requirement['requirement_type']}</td>
                                <td>{$requirement['processor']}</td>
                                <td>{$requirement['ram']}</td>
                                <td>{$requirement['storage']}</td>
                                <td>{$requirement['firmware']}</td>
                                <td>{$requirement['tpm']}</td>
                                <td>{$requirement['graphics_card']}</td>
                                <td>{$requirement['display']}</td>
                                <td>{$requirement['internet_connection']}</td>
                                <td>{$requirement['additional_features']}</td>
                            </tr>
            _HTML;
        }

        echo <<< _HTML
                        </table>
                        <p class="InfoOS"><a href="{$distroLink}">Скачать Windows 11</a></p>
                    </div>
                </body>
            </html>
        _HTML;
    }
}
?>