<?php
include 'check_current_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>funnyEnglish</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/registration.css">
        <link rel="stylesheet" href="css/signin.css">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">
    </head>
    <body>

    <div>
        <nav class="navigation">
            <div>
                <img height="100" src="img/logo_on_bar.png" alt = "funnyEnglish" class="logo"/>
            </div>
            <div>
                <ul>
                    <li><a href="aboutus.html" >О нас</a></li>
                    <li><a href="#" class="btn-reg">Регистрация</a></li>
                    <li><a href ="#" class="btn-sign-in"> Вход </a></li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="contentText">
        <H1>Изучай English с нами</H1>
        <h1>Быстро, весело, занимательно!</h1>

    </div>

    <div class = "icons">

        <img height="250" src="img/try.png" alt = "icons">


    </div>
    <div class = "devis">

        <ul>
            <li>Учись</li>
            <li>Играй</li>
            <li>Смотри</li>
            <li>Слушай</li>
            <li>Читай</li>
            <li>Знакомься</li>
        </ul>

        <img width="250" src="img/logo3.png" alt = "EnglishMen" class="logo3"/>
    </div>

    <div class="signInScene">
        <div class="signInBlock">
            <div class="close">
                <span onclick="closeSignInForm()">×</span>
            </div>
            <div>
                <form id="signInForm" action="" method="post">

                    <label for="login_field">Username</label>
                    <input id="login_field" class="input-field" name="login" type="text" placeholder="Enter Username">
                    <label for="password_field">
                        Password
                        <a class="label-link" href="/password_reset">Forgot password?</a>
                    </label>
                    <input id="password_field" class="input-field" name="password" type="password" placeholder="Enter Password" autocomplete="off">
                    <input name="commit" onclick="sign_in()" class="btn-block" value="Sign in" data-disable-with="Singing in..." type="button">
            </form>
            </div>
        </div>
    </div>



    <div class="signUpScene">
        <div class="signUpBlock">
            <div class="close">
                <span onclick="closeRegForm()">×</span>
            </div>
            <div>
                <form id="signUpForm" action="" method="post">
                    <label>Регистрация</label>
                    <label for="log_signUp">Login</label>
                    <input id="log_signUp" name="login" type="text" class="input-field">

                    <label for="email_signUp">email</label>
                    <input id="email_signUp"  name="email" type="email" class="input-field" >


                    <label for="pass_signUp"> Password </label>
                    <input id="pass_signUp" name="pass" type="password" class="input-field"  >

                    <label for="reenterpass"> Repeat password</label>
                    <input id="reenterpass" name="repass" type="password" autocomplete="off" class="input-field" >

                    <input name="commit_signUp" onclick="sign_up()" type="button" value="Sign up" data-disable-with="Singing in..."  class="btn-block" >
                </form>
                <div id="note"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/sign_in.js"></script>
    <script type="text/javascript" src="js/sign_up.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <footer><?php include "copyright.php"; ?></footer>

    </body>
</html>