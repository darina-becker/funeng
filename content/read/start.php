<?php
include '../../check_session.php';
?>
<html>
<head>
    <!--<link rel="stylesheet" href="../../css/main.css">-->
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

    <title>Читай</title>

<style>
    title{

        font-family: 'Caveat', cursive;

    }
    html, body {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;

        -webkit-text-size-adjust: 100%;
        background-color: #009966;
        height: 100%;
        -webkit-font-smoothing: antialiased;
    }

    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #009966;
        font-family: 'Caveat', cursive;

    }

    .message {
        text-align: center;
        align-self: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0px 20px;
        max-width: 710px;
    }

    .message__logo {
        max-width: 200px;
        max-height: 200px;
        border: none;
    }

    .message__title {
        font-size: 40px;
        font-weight: 100;
        margin-top: 15px;
        color: #47494E;
        margin-bottom: 8px;
    }

    .message__subtitle {
        font-size: 23px;
        font-weight: 100;
        margin-top: 15px;
        color: #47494E;
        margin-bottom: 8px;
    }

    p {
        -webkit-margin-after: 0px;
        -webkit-margin-before: 0px;
        font-size: 15px;
        color: #dddddd;
        line-height: 21px;
        margin-bottom: 4px;
    }

    .w600px {
        max-width: 600px;
    }

    a, small {
        -webkit-margin-after: 0px;
        -webkit-margin-before: 0px;
        font-size: 14px;
        color: #7F828B;
        line-height: 21px;
        margin-bottom: 4px;
        margin-top: 20px;
        text-decoration: none;
    }

    a {
        font-size: 15px;
        color: #b80303;
        padding-bottom: 2px;
        text-decoration: underline;
    }
    .btn {
        display: inline-block;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        margin-top: 10px;
        font-size: 14px;
        color: #7F828B;
        border: 1px solid #7F828B;
    }

    .btn-active {
        margin-top: 35px !important;
        background: #d10303;
        color: #009966 !important;
        font-size: 17px;
        font-weight: 500;
        border: none;
    }

    .hk-logo, .app-icon {
/*
        fill: #DBE1EC;
*/
        fill: #009966 ;
    }

    .info {
        fill: #009966;
    }

    body.friendly {
        background: -webkit-linear-gradient(-45deg, #b80303 0%, #000 100%);
        background: linear-gradient(135deg, #b80303 0%, #000 100%);
    }

    body.friendly .message__title {
        color: #009966;
    }

    body.friendly p {
/*
        color: rgba(255, 255, 255, 0.6);

*/
    color: #009966;
    }

    body.friendly .hk-logo, body.friendly .app-icon {
/*
        fill: rgba(255, 255, 255, 0.9);
*/
        fill: #009966;
    }

    body.friendly .info {
/*
        fill: rgba(255, 255, 255, 0.9);
*/
        fill: #009966;
    }

    body.friendly .btn {
        color: #009966;
/*
        border: 1px solid rgba(255, 255, 255, 0.9);
*/
    }

    .info_area {
        position: fixed;
        right: 12px;
        bottom: 12px;
    }

    .logo {
        position: fixed;
        left: 12px;
        bottom: 12px;
    }
    #footer {
        display: none;
    }


    .readListen {
        display: inline-block;
        box-sizing: inherit;
        text-transform: uppercase;
        text-decoration: none;
        line-height: 30px;
        align-items: flex-start;
        /*  border: 2px solid rgba(200, 255, 255, 0.5); */
        font-size: 16px; /*размер букв в кнопке*/
        color: #f2f2f2;
        height: 30px; /*высота кнопки*/
        width: 70%; /* размер кнопки относительно текста*/
        text-align: center;
        font-weight: 800; /*толщина букв*/
        /*    margin-right: 70px;
        margin-left: 70px;*/
        position: relative;
        overflow: hidden;
        transition: .5s ease-in;
        font-family: 'Caveat', cursive;
        padding: 5px 5px;
        margin-left: 10%;


    }


/*
    .readListen::before{
        position: absolute;
        height: 5px;
        width:0;
        background-color: red;
        left: 10%;
        top:0;
        content: '';
        transition: all ease-in-out 250ms;
        -moz-transition: all ease-in-out 250ms;
    }
*/

    .readListen:hover {
        background-color: rgba(200, 255, 255, 0.35);
        color: black;
        border-radius:40px ;

    }
    .text{
        font-size: 20px;
    }
    </style>
</head>



<body>
<!--<div>
    <nav class="navigation">
        <div class="logo">
            <img height="100" src="img/logo_on_bar.png" alt = "EnglishMen" class="logo"/>
        </div>
        <div>
            <ul>
                <?php /*if(isset($_GET["username"])){
                    $user = $_GET["username"];
                    echo "<li><a href='#'>" . $user . "</a></li>";
                }*/?>
                <li><a href="/content/read/start.php">Read</a></li>
                <li><a href="#">Writing</a></li>
                <li><a href="/content/listen-and-watch/start.php">Listening</a></li>
                <li><a href ="#"> Выход </a></li>
            </ul>
        </div>

    </nav>

</div>-->


<h1>Читай</h1>
<table>
  <colgroup>
    <col>
    <col style="width: 500;">
  </colgroup>
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
</body>
</html>