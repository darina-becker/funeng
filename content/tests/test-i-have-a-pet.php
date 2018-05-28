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
    <?php include "test-pattern.php"?>
</div>
<?php include "../../to_homepage.php"; ?>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
</body>
</html>