
<?php
session_start();
unset($_SESSION['count']);
redirect('/');


function redirect($url){
    header('Location: ' . $url);
    exit();
}
