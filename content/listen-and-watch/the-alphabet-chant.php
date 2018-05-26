<?php
include '../../check_session.php';
?>
<html>
<head>
<title>The Alphabet Chant</title>
    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">


</head>



<body>
<h2>The Alphabet Chant</h2>
<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/GS_cGsAnQvQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
<video width="560" height="315" controls="controls">
    <source src="video/the_alphabet_chant.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>
<?php include "../../to_homepage.php"; ?>

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
</body>
</html>
