<?php
include '../../check_session.php';
?>
<html>
<head>
    <!--<link rel="stylesheet" href="../../css/main.css">-->

    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

    <title>Читай</title>
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
    <caption><h1>Читай</h1></caption>
    <tr>
    <td><img src="img/Giant.jpg" alt="" height="180" /></td>
    <td style="background-color: #009966">
		<h2>Новый наряд великана</h2>
		<p class="text">Сказка Джулии Дональдсон об очень добром великане, который хотел выглядеть модно, но не смог пройти мимо чужого горя и остался при своем старом наряде.</p>
		<p><a href="the_smartest_giant2.php" class="readListen">Читать и слушать</a></p>
	</td>
  </tr>
  <tr>
    <td><img src="img/Gruffalo.jpg" alt=""  height="180" /></td>
    <td>
		<h2>Груффало</h2>
		<p class="text">Сказка Джулии Дональдсон об умном мышонке, который вымышленным чудовищем отпугнул своих обидчиков: лису, змею и сову.</p>
		<p><a href="gruffalo2.php" class="readListen">Читать и слушать</a></p>
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