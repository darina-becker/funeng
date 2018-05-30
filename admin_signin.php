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

    $id = null;
    $hash = "";

    if(!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
        echo "access deny 4";
        exit;
    }

    include "db.php";
    $login_query = "SELECT id, hash_pswd FROM `admins` WHERE login = '" . $login . "'";

    if ($result = mysqli_query($connection, $login_query)) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hash = $row["hash_pswd"];
            $id = $row["id"];
        } else {
            echo  "access deny1!";
//            todo wrong login
            exit;
        }
        mysqli_free_result($result);
    } else {
        echo "access deny 2!";
    }
    if (password_verify($password, $hash)) {
        $session_hash = generateRandomString(64);
        $add_session_hash = "update `admins` SET session_hash='" . $session_hash . "' where id='" . $id . "'";
        if($result = mysqli_query($connection, $add_session_hash)) {
            /*setcookie("id", $id, time() + 60*60*24); //todo replace login by id
            setcookie("session_hash", $session_hash, time() + 60*60*24);
            */
           /* session_start();
            if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 0;
            } else {
                $_SESSION['count']++;
            }*/


            session_start();

            if (!isset($_SESSION['time'])) {
                $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];
                $_SESSION['time'] = date("H:i:s");

            }



                //echo $_SESSION['time'];
            echo "OK";
        }
        exit;
    } else {
        echo "Wrong password 3!";
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