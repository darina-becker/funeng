<?php
    session_start();
    $token=bin2hex(openssl_random_pseudo_bytes(128,$cstrong));
    $_SESSION['security_token']=$token;
?>
<!DOCTYPE html>
<html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/header.php');

?>
<body>
<div>
    <nav class="navigation">
        <div>
            <img height="100" src="img/logo_on_bar.png" alt = "funnyEnglish" class="logo"/>
        </div>
        <div>
            <ul>
                <li><a href ="#" class="btn-sign-in"> Вход </a></li>
            </ul>
        </div>
    </nav>

</div>



<div class="signInScene">
    <div class="signInBlock">
        <div class="close">
            <span onclick="closeSignInForm()">×</span>
        </div>
        <div>
            <form id="signInForm" action="" method="post">
                <input type="hidden" id="tokenAdmSignIn" value="<?php echo $token;?>">
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



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');
?>

<script type="text/javascript" src="js/adminin.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>


</body>
</html>