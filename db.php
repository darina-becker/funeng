<?php
//$connection = mysqli_connect("localhost", "admin", "admin", "funeng", "3306");
$connection = mysqli_connect("us-cdbr-iron-east-04.cleardb.net", "baee442aa8b79c", "f33121f7", "heroku_f76f1b2818ac133", "3306");

if (!$connection) {
    echo "Ошибка БД";
    exit;
}

