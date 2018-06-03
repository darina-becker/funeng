<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 15.05.2018
 * Time: 11:38
 */

if (isset($_COOKIE['id']) && isset($_COOKIE['session_hash'])){
    $id_from_cookie = $_COOKIE['id'];
    $session_hash_from_cookie = $_COOKIE['session_hash'];
    include "db.php";
    $log_out = "UPDATE `users` SET session_hash = null WHERE id = '" . $id_from_cookie . "'";

    if ($result = mysqli_query($connection, $log_out)) {
        if (mysqli_num_rows($result) == 1) {
            unset($_COOKIE['id']);
            unset($_COOKIE['session_hash']);
            setcookie("id", null, 1);
            setcookie("session_hash", null, 1);
            redirect('/');
        } else {
            redirect('/');
        }
    }

} else {
    redirect($_SERVER['DOCUMENT_ROOT'].'/');
}

function redirect($url){
    header('Location: ' . $url);
    exit();
}

?>