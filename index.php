<?php
//include 'check_current_session.php';
    session_start();
    $token=bin2hex(openssl_random_pseudo_bytes(128,$cstrong));
    $_SESSION['security_token']=$token;
?>

<!DOCTYPE html>
<html>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
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
                    <input type="hidden" id="tokenSignIn" value="<?php echo $token;?>">
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
                    <input type="hidden" id="tokenSignUp" value="<?php echo $token;?>">
                    <label>Регистрация</label>
                    <label for="log_signUp">Login</label>
                    <input id="log_signUp" name="login" type="text" class="input-field">

                    <label for="email_signUp">email</label>
                    <input id="email_signUp"  name="email" type="email" class="input-field" >


                    <label for="pass_signUp"> Password </label>
                    <input id="pass_signUp" name="pass" type="password" autocomplete="off" class="input-field"  >

                    <label for="reenterpass"> Repeat password</label>
                    <input id="reenterpass" name="repass" type="password" autocomplete="off" class="input-field" >

                    <input name="commit_signUp" onclick="sign_up()" type="button" value="Sign up" data-disable-with="Singing in..."  class="btn-block" >
                </form>
                <div id="note"></div>
            </div>
        </div>
    </div>

    <?php
        include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
    ?>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/sign_in.js"></script>
    <script type="text/javascript" src="js/sign_up.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>


    </body>
</html>