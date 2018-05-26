<?php
include ($_SERVER['DOCUMENT_ROOT'].'/check_session.php');
?>

<html>
<head>
<title>I Have A Pet</title>
    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

</head>



<body>
<h2>I Have A Pet</h2>

<!--<iframe width="560" height="315" src="/video/i_have_a_pet.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
<video width="560" height="315" controls="controls">
    <source src="video/i_have_a_pet.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>
<?php include "../../to_homepage.php"; ?>
<div class="cpr"><?php include "../../copyright.php"; ?></div>

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>

</body>
</html>
