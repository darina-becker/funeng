<?php
include '../../check_session.php';
?>
<html>
<head>
<title>Walking In The Jungle</title>
    <link rel="stylesheet" href="../../css/pagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

</head>



<body>
<h2>Walking In The Jungle</h2>
<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/GoSq-yZcJ-4" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
<video width="560" height="315" controls="controls">
    <source src="video/walking_in_the_jungle.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>

<?php include "../../to_homepage.php"; ?>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
</body>
</html>
