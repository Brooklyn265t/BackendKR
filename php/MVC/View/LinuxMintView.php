<?php
class LinuxMintView
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
                    <title>Linux Mint</title>
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
                        <p>Linux Mint — это популярная операционная система на базе Linux, основанная на Ubuntu и Debian. Она была создана с целью предоставить пользователям удобный и интуитивно понятный интерфейс, а также обеспечить стабильность и безопасность. Linux Mint подходит как для новичков, так и для опытных пользователей, предлагая множество предустановленных приложений и инструментов для работы.</p>
                        <h2>Основные функции Linux Mint:</h2>
                        <ul>
                            <li>Простой и интуитивно понятный интерфейс, который напоминает классические версии Windows, что облегчает переход для новых пользователей.</li>
                            <li>Предустановленные приложения, такие как LibreOffice, GIMP и VLC, что позволяет сразу начать работу без необходимости установки дополнительных программ.</li>
                            <li>Поддержка различных рабочих окружений, включая Cinnamon, MATE и Xfce, что позволяет пользователям выбрать наиболее подходящий для себя интерфейс.</li>
                            <li>Инструменты для управления обновлениями и установкой программного обеспечения, такие как Software Manager и Update Manager, которые делают процесс простым и удобным.</li>
                            <li>Сильное сообщество пользователей и разработчиков, которое предоставляет поддержку и ресурсы для решения проблем и обмена опытом.</li>
                        </ul>
                        <h1>Системные требования Linux Mint</h1>
                        <table border="1">
                            <tr class="info">
                                <th>Тип требования</th>
                                <th>Процессор</th>
                                <th>Оперативная память</th>
                                <th>Хранилище</th>
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
                                <td>{$requirement['graphics_card']}</td>
                                <td>{$requirement['display']}</td>
                                <td>{$requirement['internet_connection']}</td>
                                <td>{$requirement['additional_features']}</td>
                            </tr>
            _HTML;
        }

        echo <<< _HTML
                        </table>
                        <p class="InfoOS"><a href="{$distroLink}">Скачать Linux Mint</a></p>
                    </div>
                </body>
            </html>
        _HTML;
    }
}
?>