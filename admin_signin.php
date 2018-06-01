<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 07.05.2018
 * Time: 2:32
 */
session_start();
if(isset($_POST['token']) && isset($_SESSION['security_token'])) {

    if ($_SESSION['security_token'] == $_POST['token']) {

        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $login = $_POST['username'];
            $password = $_POST['password'];

            $id = null;
            $hash = "";

            $bad_login_limit = 3;
            $lockout_time = 60;
            $first_bad_auth_timestamp = null;
            $count_login_failed = null;

            if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
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
                    echo "access deny1!";
//            todo wrong login
                    exit;
                }
                mysqli_free_result($result);
            } else {
                echo "access deny 2!";
            }

            $failed_login_query = "SELECT first_bad_auth_timestamp, count_login_failed FROM admin_pswd_error WHERE admin_pswd_error.user_id =" . $id;
            if ($result = mysqli_query($connection, $failed_login_query)) {
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $first_bad_auth_timestamp = $row['first_bad_auth_timestamp'];
                    $count_login_failed = $row['count_login_failed'];

                    if (($count_login_failed >= $bad_login_limit) &&
                        (time() - $first_bad_auth_timestamp < $lockout_time)) {
                        echo "You are blocked! try after " . ($lockout_time - (time() - $first_bad_auth_timestamp)) . " seconds";
                        exit;
                    } else if (!password_verify($password, $hash)) {
                        if (time() - $first_bad_auth_timestamp > $lockout_time) {
                            $first_bad_auth_timestamp = time();
                            $count_login_failed = 1;
                            $commit_query = "UPDATE admin_pswd_error SET first_bad_auth_timestamp=" . $first_bad_auth_timestamp . ", count_login_failed=" . $count_login_failed . " where user_id =" . $id;
                            if ($rcq = mysqli_query($connection, $commit_query)) {
                                echo "Неверный пароль, попытка: " . $count_login_failed;
                                exit;
                            }
                        } else {
                            $count_login_failed++;
                            $commit_query = "UPDATE admin_pswd_error SET count_login_failed=" . $count_login_failed . " where user_id =" . $id;
                            if ($rcq = mysqli_query($connection, $commit_query)) {
                                echo "Неверный2 пароль, попытка: " . $count_login_failed;
                                exit;
                            }
                        }
                    } else {
                        if (password_verify($password, $hash)) {
                            $session_hash = generateRandomString(64);
                            $add_session_hash = "update `admins` SET session_hash='" . $session_hash . "' where id='" . $id . "'";
                            if ($result = mysqli_query($connection, $add_session_hash)) {
                                /*setcookie("id", $id, time() + 60*60*24); //todo replace login by id
                                setcookie("session_hash", $session_hash, time() + 60*60*24);
                                */
                                /* session_start();
                                 if (!isset($_SESSION['count'])) {
                                     $_SESSION['count'] = 0;
                                 } else {
                                     $_SESSION['count']++;
                                 }*/


//                    session_start();

                                if (!isset($_SESSION['time'])) {
                                    $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];
                                    $_SESSION['time'] = date("H:i:s");
                                    $_SESSION['ra'] = $_SERVER['REMOTE_ADDR'];
                                    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                        $_SESSION['xff'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
                                    }
                                }

                                echo "OK";
                            }
                            exit;
                        } else {
                            echo "Wrong password 3!";
                            exit;
                        }
                    }
                }


            }
            
            
        }
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