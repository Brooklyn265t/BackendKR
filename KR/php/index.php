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
        require_once 'vendor/autoload.php';
        require_once 'dbconn.php';
        use Amenadiel\JpGraph\Graph;
        use Amenadiel\JpGraph\Plot;
        function bar() {
            // Получение соединения с базой данных
            $conn = connectToDB();
            $uses = $conn->query("SELECT uses FROM populos");
            $oses = $conn->query("SELECT name FROM populos");

            $data1 = array_map(function($x){
                return (float)$x[0];
            }, $uses->fetch_all());
            $data2 = array_map(function($x){
                return $x[0];
            }, $oses->fetch_all());

            // Create the graph. These two calls are always required
            $__width  = 600;
            $__height = 300;
            $graph    = new Graph\Graph($__width, $__height);
            $graph->SetScale('textlin');

            $graph->SetShadow();
            $graph->img->SetMargin(40, 30, 20, 40);

            // Create the bar plots
            $bplot = new Plot\BarPlot($data1);
            $bplot->SetFillColor('green');
            $bplot->value->Show();

            // ...and add it to the graPH
            $graph->Add($bplot);

            $graph->title->Set('Popular OS');

            $graph->xaxis->SetTickLabels($data2);

            $graph->title->SetFont(FF_FONT1, FS_BOLD);
            $graph->yaxis->title->SetFont(FF_FONT1, FS_BOLD);
            $graph->xaxis->title->SetFont(FF_FONT1, FS_BOLD);

            // Display the graph
            $res = $graph->Stroke(_IMG_HANDLER);
            ob_start();
            imagepng($res);
            $img = ob_get_contents();
            ob_end_clean();
            return base64_encode($img);
        }
        echo "<img src='data:image/png;base64,".bar()."'>";
        ?>
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