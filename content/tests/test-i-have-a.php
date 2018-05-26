<?php
include($_SERVER['DOCUMENT_ROOT'] . '/check_session.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>   
<link rel="stylesheet" href="../../css/main.css" type="text/css" />
<title>Страница</title>
<style>

    html, body {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        background-color: #009966;
        height: 100%;
        -webkit-font-smoothing: antialiased;
    }
    p{

        margin-left: 13%;
        color: #ffffff;
        font-family: 'Caveat', cursive;

    }
    .element{
        margin-left: 37%;
    }
    .element2{

        display: inline-block;
        box-sizing: inherit;
        text-transform: uppercase;
        text-decoration: none;
        line-height: 30px;
        align-items: flex-start;
        /*  border: 2px solid rgba(200, 255, 255, 0.5); */
        font-size: 16px; /*размер букв в кнопке*/
        color: #000000;
        height: 30px; /*высота кнопки*/
        width: 40%; /* размер кнопки относительно текста*/
        text-align: center;
        font-weight: 800; /*толщина букв*/
        /*    margin-right: 70px;
        margin-left: 70px;*/
        position: relative;
        overflow: hidden;
        transition: .5s ease-in;
        font-family: 'Caveat', cursive;
        padding: 5px 5px;
        margin-left: 0%;

    }

    #btn-send{
        margin-bottom: 20px;
    }
</style>
</head>

<body>
<div>
<form method="post" action="test.php">
	<div class="element">
		<p><strong>I have a cat</strong> </p>
		<input type="radio" name="cat" value="turtle"> <img src="img/i-have-a-turtle.jpg" alt="" />
		<input type="radio" name="cat" value="cat"> <img src="img/i-have-a-cat.jpg" alt="" />
		<input type="radio" name="cat" value="hamster"> <img src="img/i-have-a-hamster.jpg" alt="" />
	</div>
	<div class="element">
		<p><strong>I have a dog</strong> </p>
		<input type="radio" name="dog" value="dog"> <img src="img/i-have-a-dog.jpg" alt="" />
		<input type="radio" name="dog" value="fish">  <img src="img/i-have-a-fish.jpg" alt="" />
		<input type="radio" name="dog" value="duck">  <img src="img/i-have-a-duck.jpg" alt="" />
	</div>
	<div class="element">
		<p><strong>I have a rabbit</strong> </p>
		<input type="radio" name="rabbit" value="bird">  <img src="img/i-have-a-bird.jpg" alt="" />
		<input type="radio" name="rabbit" value="rabbit">  <img src="img/i-have-a-rabbit.jpg" alt="" />
		<input type="radio" name="rabbit" value="snail">  <img src="img/i-have-a-snail.jpg" alt="" />
	</div>
	<div class="element">
		<p><strong>I have a turtle</strong> </p>
		<input type="radio" name="turtle" value="turtle">  <img src="img/i-have-a-turtle.jpg" alt="" />
		<input type="radio" name="turtle" value="dog">  <img src="img/i-have-a-dog.jpg" alt="" />
		<input type="radio" name="turtle" value="bee"> <img src="img/i-have-a-bee.jpg" alt="" />
	</div>
	<div class="element">
		<p><strong>I have a bird</strong> </p>
		<input type="radio" name="bird" value="fidh"> <img src="img/i-have-a-fish.jpg" alt="" />
		<input type="radio" name="bird" value="cat">  <img src="img/i-have-a-cat.jpg" alt="" />
		<input type="radio" name="bird" value="bird">  <img src="img/i-have-a-bird.jpg" alt="" />
	</div>
		<div class="element">
		<p><strong>I have a hamster</strong> </p>
		<input type="radio" name="hamster" value="hamster">  <img src="img/i-have-a-hamster.jpg" alt="" />
		<input type="radio" name="hamster" value="duck">  <img src="img/i-have-a-duck.jpg" alt="" />
		<input type="radio" name="hamster" value="rabbit">  <img src="img/i-have-a-rabbit.jpg" alt="" />
	</div>
	<div class="element" id="btn-send">
		<br><input class = "element2" type="submit" value="Отправить ответы" />
	</div>
</form>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');
?>
</body>
</html>

