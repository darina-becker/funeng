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
                <col style="width: 500;">
            </colgroup>
            <caption><h1>Тесты </h1></caption>
            <tr>
                <td><img src="img/i-have-a-pet.png" alt="" height="180" /></td>
                <td style="background-color: #009966">
                    <h2>I have a pet</h2>
                    <p class="text"> Как будет по английски кот? А хомяк? Проверь свои знания</p>
                    <p><a href="test-i-have-a-pet.php" class="readListen">Пройти</a></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <h2>Ещё какой-нибудь тест</h2>
                    <p class="text">Описание</p>
                    <p><a href="gruffalo2.php" class="readListen">Ссылка</a></p>
                </td>
            </tr>

        </table>

</div>
<?php include "../../to_homepage.php"; ?>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
</body>
</html>