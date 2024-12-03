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
    <?php
    require_once 'dbconn.php';
    $conn = connectToDB();
    $result = $conn->query("SELECT * FROM distro");
    echo "<table class='infoOS'>";
    foreach ($result as $row){
        echo "<tr><td>{$row['Distro_name']}</td><td><a href='{$row['Distro_link']}'>{$row['Distro_link']}</a></td></tr>";
    }
    echo "</table>";
    ?>
    </main>
</body>
</html>
