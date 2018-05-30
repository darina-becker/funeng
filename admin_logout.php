
<?php
session_start();
unset($_SESSION['count']);
unset($_SESSION['ua']);
unset($_SESSION['ra']);
unset($_SESSION['xff']);
redirect('/');

function redirect($url){
    header('Location: ' . $url);
    exit();
}
