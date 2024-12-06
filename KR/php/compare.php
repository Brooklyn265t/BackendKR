<html>
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
    <link rel="stylesheet" href="html/photocard.css">
</head>
<body id="backgroundsites">
<header>
    <nav class="PositionForNavigation">
        <a href="index.php">Главная странница</a>
        <a href="distribution.php">Список дистрибутивов</a>
        <a href="Account/login.php">Вход</a>
    </nav>
</header>
<main class="positionmain">
    <?php
    require_once 'DB_Connect/dbconn.php';
    $conn = PDO_db();
    $result = $conn->query("SELECT * FROM osvs");
    echo "<table class='infoOS'>";
    foreach ($result as $row){
        echo "<tr><td>{$row['characteristic']}</td><td>{$row['windows']}</td><td>{$row['macos']}</td><td>{$row['linux']}</td></tr>";
    }
    echo "</table>";
    ?>
</main>
<div class="btnup"></div>
<script src="js/btnUP.js"></script>
<footer>
    <p class="shrift">© Beloglintsev Ivan 2022-<span id="current-year"></span></p>
    <script src="js/CurrentYear.js"></script>
    <!--    <div class="flexsocial">-->
    <!--        <img class="img" src="html/pictures/Telegram.png">-->
    <!--    </div>-->
</footer>
</body>
</html>