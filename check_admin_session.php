<?php

session_start();
// $_SESSION['ua'] = 'hgugjh';
if (isset($_SESSION['ua']) and isset($_SESSION['ra'])) {
    if ($_SESSION['ua'] != $_SERVER['HTTP_USER_AGENT']) {
        redirect('/');
    }
    if ($_SESSION['ra'] != $_SERVER['REMOTE_ADDR']) {
        redirect('/');
    }
}
else {  redirect('/');}

if (isset($_SESSION['xff'])) {
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if ($_SESSION['xff'] != $_SERVER['HTTP_X_FORWARDED_FOR']) {
            redirect('/');      }
    }
}

function redirect($url){
    header('Location: ' . $url);
    exit();
}
?>