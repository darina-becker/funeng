<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 07.05.2018
 * Time: 2:32
 */

if(isset($_POST["username"]) && isset($_POST["password"])){
    $login = $_POST['username'];
    $password = $_POST['password'];
    $hash = "";

    if(!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
        echo "Неверный логин или пароль 4";
        exit;
    }

    include "db.php";
    $login_query = "SELECT hash_pswd FROM `users` WHERE login = '" . $login . "'";

    if ($result = mysqli_query($connection, $login_query)) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hash = $row["hash_pswd"];
        } else {
            echo  "Неверный логин или пароль1!";
//            todo wrong login
            exit;
        }
        mysqli_free_result($result);
    } else {
        echo "Неверный логин или пароль2!";
    }
    if (password_verify($password, $hash)) {
        $session_hash = generateRandomString(64);
        $add_session_hash = "update `users` SET session_hash='" . $session_hash . "' where login='" . $login . "'";
        if($result = mysqli_query($connection, $add_session_hash)) {
            setcookie("login", $login, time() + 60*60*24); //todo replace login by id
            setcookie("session_hash", $session_hash, time() + 60*60*24);
            echo "OK";
        }
       exit;
    } else {
        echo "Неверный логин или пароль3!";
        exit;
    }
}


function generateRandomString($length)
{

    $keys = array_merge(array_merge(range(0,9), range('a', 'z')),range('A','Z'));

    $key = "";
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}
//$alphabet = '0123456789abcdefghjklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXZY';



