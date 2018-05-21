<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 15.05.2018
 * Time: 11:38
 */

if (isset($_COOKIE['login']) && isset($_COOKIE['session_hash'])){
    $login_from_cookie = $_COOKIE['login'];
    $session_hash_from_cookie = $_COOKIE['session_hash'];
    $connection = mysqli_connect("us-cdbr-iron-east-04.cleardb.net", "baee442aa8b79c", "f33121f7", "heroku_f76f1b2818ac133", "3306");
    $log_out = "UPDATE `users` SET session_hash = null WHERE login = '" . $login_from_cookie . "'";

    if ($result = mysqli_query($connection, $log_out)) {
        if (mysqli_num_rows($result) == 1) {
            unset($_COOKIE['login']);
            unset($_COOKIE['session_hash']);
            setcookie("login", null, 1);
            setcookie("session_hash", null, 1);
            redirect('/');
        } else {
            redirect('/');
        }
    }

} else {
    redirect('/');
}

function redirect($url){
    header('Location: ' . $url);
    exit();
}

?>