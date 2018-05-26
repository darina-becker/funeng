<?php
    include 'check_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <head>
        <meta charset="UTF-8" >
        <title>Главная</title>
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">
    </head>
</head>
<body>
<div>
    <nav class="navigation">
        <div class="logo">

            <img height="100" src="img/logo_on_bar.png" alt = "EnglishMen" class="logo"/>
        </div>
        <div>

            <ul>
                <?php if(isset($_COOKIE["login"])){
                    $user = $_COOKIE["login"];
                    echo "<li><a href='#'>" . $user . "</a></li>";
                }?>
                <li><a href="/content/read/start.php">Read</a></li>
                <li><a href="/content/learn/vocabulary/test-i-have-a.php">Tests</a></li>
                <li><a href="/content/listen-and-watch/start.php">Listen and Watch</a></li>
                <li><a href ="/logout.php"> Выход </a></li>
            </ul>
            <img width="250" src="img/logo3.png" alt = "EnglishMen" class="logo3"/>

        </div>

    </nav>
</div>

<!--не видно его на странице почему-то-->
<div class="contentText"><p><?php include "copyright.php"; ?></p></div>

</body>
</html>