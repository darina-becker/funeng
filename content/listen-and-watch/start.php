<?php
include '../../check_session.php';
?>

<html>
<head>
<title>Смотри</title>
    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">


</head>

<body>
<h1 class="text2">Смотри</h1>
<table>
  <colgroup >
    <col style="width: 300;">
    <col style="width: 300;">
	<col style="width: 300;">
  </colgroup>
  <tr>
    <td>
		<a href="i-have-a-pet.php"> <img class="animate1" src="img/i-have-a-pet.jpg" alt="" height="180"/> </a>
	</td> 
    <td>
		<a href="walking-in-the-jungle.php"> <img class="animate1" src="img/walking-in-the-jungle.jpg" alt="" height="180"/> </a>
	</td>
	<td>
		<a href="the-alphabet-chant.php"> <img class="animate1" src="img/the-alphabet-chant.jpg" alt="" height="180"/> </a>
	</td>
   </tr>
   <tr>
		<td><p class="text"><b>"I have a pet"</b> - песенка о домашних животных</p></td>
		<td><p class="text"><b>"Walking in the Jungle"</b> - песня про смелых ребят, гуляющих в джунглях</p></td>
		<td><p class="text"><b>"The Alphabet Chant"</b> - попробуй повторить алфавит как можно быстрее!</p></td>
	</tr>
</table>
<?php include "../../to_homepage.php"; ?>
<footer><?php include "../../copyright.php"; ?></footer>

</body>
</html>
