<?php
include '../../check_session.php';
?>
<html>
<head>
    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">
    <title>Груффало</title>
</head>

<body>
<?php
include ($_SERVER["DOCUMENT_ROOT"].'/navbar2.php');
?>

<div class="contentText">
<h1 class="text2">Груффало</h1>
<p class="text">
Сказка Джулии Дональдсон об умном мышонке, который вымышленным чудовищем отпугнул своих обидчиков (лису, змею, сову).</p>

<p class="text">Книга: <a href="books/Gruffalo.pdf" >The Gruffalo</a></p>
<p class="text">Веселые задания: <a href="books/Gruffalo_activity.pdf"> The Gruffalo - Activity book </a></p>
<p class="text">Смотреть и слушать:</p>
<iframe width="660" height="415"  src="https://www.youtube.com/embed/ThZqDoJi5S0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>

<?php include "../../to_homepage.php"; ?>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
</body>
</html>