<html lang="ru">
<head>
    <title>Современная ОС</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="" sizes="any">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/SocialButton.css">
    <link rel="stylesheet" href="css/ButtonUP.css">
</head>
<body id="backgroundsites">
<header>
    <nav class="PositionForNavigation">
        <a href="compare.php">Сравнение</a>
        <a href="distribution.php">Список дистрибутивов</a>
        <a href="Account/register.php">Вход</a>
    </nav>
</header>
<main class="positionmain">
    <section>
        <h3 class="main-font-color">Справочник по Операционным системам</h3> <!-- создаёт заголовок.И используется абревиатура-->
        <dl class = "shrift">
            <dt>Операционная Система <abbr>ОС</abbr></dt>
            <dd>Операционная система (ОС) — это специальная программа,
                которая управляет аппаратным обеспечением компьютера
                и обеспечивает взаимодействие между пользователем и устройством.</dd>
        </dl>
        <em class="main-font-color">По данным сайта <a href="https://gs.statcounter.com/os-market-share/desktop/worldwide">StatCounter июня 2023 года по июнь 2024 года</a><br></em>
        <!-- <em></em> акцентируемый текст -->
        <?php
        include_once $_SERVER["DOCUMENT_ROOT"]."/DB_Connect/dbconn.php";
        include $_SERVER["DOCUMENT_ROOT"]."/MVC/Controller/GraphController.php";
        include $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/GraphModel.php";
        include $_SERVER["DOCUMENT_ROOT"]."/MVC/View/GraphView.php";

        $conn = PDO_db(); // Функция для подключения к базе данных
        $model = new GraphModel($conn);
        $controller = new GraphController($model);
        $view = new GraphView($controller);
        $view->print(); // Вывод графика?>
    </section>
</main>
<section class="infoOS">
        <h3 class="h3info">Windows</h3>
        <p>Windows — это семейство операционных систем, разработанных компанией Microsoft.
            Первая версия Windows была выпущена в 1985 году как графическая надстройка для MS-DOS.
            С тех пор Windows претерпела множество изменений и обновлений, включая такие версии, как Windows 95, Windows XP, Windows 7, Windows 10 и Windows 11.</p>
        <h2>Особенности:</h2>
        <ol>
            <li>Графический интерфейс: Windows известна своим удобным графическим интерфейсом, который позволяет пользователям легко взаимодействовать с системой.</li>
            <li>Совместимость: Широкая поддержка программного обеспечения и игр, что делает Windows популярной платформой для пользователей и разработчиков.</li>
            <li>Обновления: Microsoft регулярно выпускает обновления для повышения безопасности и функциональности системы.</li>
        </ol>
        <h2>Недостатки:</h2>
        <ol>
            <li>Лицензирование: Windows является платной операционной системой, что может быть препятствием для некоторых пользователей.</li>
            <li>Уязвимости: Часто подвергается атакам вредоносного ПО из-за своей популярности.</li>
        </ol>

        <h3 class="h3info">Mac OS</h3>
        <p>Mac OS (известная как macOS) — это операционная система, разработанная компанией Apple для своих компьютеров Mac.
            Первая версия Mac OS была выпущена в 1984 году, и с тех пор система претерпела значительные изменения.</p>
        <h2>Особенности:</h2>
        <ol>
            <li>Интеграция с экосистемой Apple: macOS обеспечивает бесшовную интеграцию с другими устройствами Apple, такими как iPhone и iPad.</li>
            <li>Дизайн и пользовательский интерфейс: macOS известна своим элегантным дизайном и интуитивно понятным интерфейсом.</li>
            <li>Оптимизация для аппаратного обеспечения: macOS оптимизирована для работы на устройствах Apple, что обеспечивает высокую производительность и стабильность.</li>
        </ol>
        <h2 class="h3info">Недостатки:</h2>
        <ol>
            <li>Лицензирование: macOS может быть установлена только на устройствах Apple, что ограничивает выбор аппаратного обеспечения.</li>
            <li>Цена: Компьютеры Mac, как правило, дороже аналогичных устройств на Windows или Linux.</li>
        </ol>

        <h3 class="h3info">Linux</h3>
        <p>Linux — это семейство операционных систем с открытым исходным кодом, основанное на ядре Linux,
            разработанном Линусом Торвальдсом в 1991 году. Linux используется в различных устройствах, от серверов до мобильных телефонов.</p>
        <h2>Особенности:</h2>
        <ol>
            <li>Открытый исходный код: Пользователи могут изменять и распространять код, что способствует инновациям и улучшению безопасности.</li>
            <li>Разнообразие дистрибутивов: Существует множество дистрибутивов Linux, таких как Ubuntu, Fedora, Debian и CentOS, каждый из которых имеет свои особенности и целевую аудиторию.</li>
            <li>Безопасность: Linux считается более безопасной системой по сравнению с Windows, благодаря своей архитектуре и меньшей распространенности среди обычных пользователей.</li>
        </ol>
        <h2>Недостатки:</h2>
        <ol>
            <li>Совместимость: Некоторые программы и игры могут не поддерживаться на Linux, что может ограничить выбор пользователей.</li>
            <li>Кривая обучения: Для новых пользователей может потребоваться время для освоения системы, особенно если они привыкли к Windows или Mac OS.</li>
        </ol>
</section>
<?php
    require_once 'DB_Connect/dbconn.php';
    $conn = PDO_db();
    $Compare = $conn->query("SELECT * FROM osvs");
    echo "<table class='infoOS'>";
    foreach ($Compare as $row){
        echo "<tr><td>{$row['characteristic']}</td><td>{$row['windows']}</td><td>{$row['macos']}</td><td>{$row['linux']}</td></tr>";
    }
    echo "</table>";
    $result = $conn->query("SELECT * FROM distro");
    echo "<table class='infoOS'>";
    foreach ($result as $row){
        echo "<tr><td>{$row['Distro_name']}</td><td><a href='{$row['Distro_link']}'>{$row['Distro_link']}</a></td></tr>";
    }
    echo "</table>";
?>

<div id="btnup"></div>
<script src="js/btnUP.js"></script>
<footer>
    <p class="shrift">© Beloglintsev Ivan 2022-<span id="current-year"></span></p>
    <script src="js/CurrentYear.js"></script>
<!--    <div class="flexsocial">-->
<!--        <img class="img" src="pictures/Telegram.png" alt="">-->
<!--    </div>-->
</footer>
</body>
</html>