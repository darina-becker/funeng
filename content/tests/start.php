<?php
include '../../check_session.php';
?>
<html>
<head>
    <!--<link rel="stylesheet" href="../../css/main.css">-->

    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

    <title>Учись</title>
</head>

<?php
include ($_SERVER["DOCUMENT_ROOT"].'/navbar2.php');
?>


<div class = contentText>

        <table>
            <colgroup>
                <col>
                <col style="width: 500px;">
            </colgroup>
            <caption><h1>Тесты </h1></caption>
            <?php
            $dir = 'xml/';
            $array = scandir($dir);
            $length = count($array);

            if ($length > 2) {
                for ($i=2; $i < $length; $i++) {
                    echo '<tr>';
                    echo   '<td><img src="img/' . mb_substr($array[$i],0, -4) . '.png" alt="" height="180" /></td>';
                    echo '<td style="background-color: #009966">';
                    echo '<h2>' . str_replace("-", " ", mb_substr($array[$i], 0, -4)) . '</h2>';
                    //<p class="text"> Как будет по английски кот? А хомяк? Проверь свои знания</p>
                    echo '<p><a href="test.php?test=' . mb_substr($array[$i], 0, -4) .  '" class="readListen">Пройти</a></p>';
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>

</div>
<?php include "../../to_homepage.php"; ?>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
</body>
</html>