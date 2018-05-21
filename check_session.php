<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 14.05.2018
 * Time: 23:50
 */

if(isset($_COOKIE['login']) && isset($_COOKIE['session_hash'])) {
    //todo
    $login_from_cookie = $_COOKIE['login'];
    $hash_from_cookie = $_COOKIE['session_hash'];
    $connection = mysqli_connect("us-cdbr-iron-east-04.cleardb.net", "baee442aa8b79c", "f33121f7", "heroku_f76f1b2818ac133", "3306");

    $session_hash_query = "SELECT session_hash FROM `users` WHERE login = '" . $login_from_cookie . "'";

    if ($result = mysqli_query($connection, $session_hash_query)) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hash = $row["session_hash"];
        } else {
            echo  "Сессия не существует!";
//            todo wrong login
            exit;
        }
        mysqli_free_result($result);
    } else {
        echo "Войдите в систему";
    }

    if ($hash != $hash_from_cookie)
    {
//        echo "<script>window.location = '/main.php'</script>";
//        exit;
        redirect('/');
//        echo "OK";
    }

} else {
    redirect('/');
}

function redirect($url){
    header('Location: ' . $url);
    exit();
}
?>