<?php

/*
if (isset($_POST['username']))
{
    $login = $_POST['username'];
    if ($login == '')
    {

        echo "Пустой логин";

        unset($login);
    }

if (isset($_POST['password']))
{
    $password=$_POST['password'];
    if ($password =='')
    {
        echo "Пустой пароль";
        unset($password);
    }

}
if (isset($_POST['email']))
{
    $emailAddr=$_POST['email'];
    if ($emailAddr =='')
    {
        echo "Пустая почта";
        unset($emailAddr);
    }

}

* /
/*if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}*/
//$login = stripslashes($login);
//$login = htmlspecialchars($login);
//$password = stripslashes($password);
//$password = htmlspecialchars($password);

//удаляем лишние пробелы
/*
$login = str_replace(' ', '', $login);;
$password = str_replace(' ', '', $password);;
*/

$password = $_POST["password"];
$login = $_POST["username"];
$email = $_POST["email"];



$hash = password_hash($password, PASSWORD_BCRYPT);


$connection = mysqli_connect("us-cdbr-iron-east-04.cleardb.net", "baee442aa8b79c", "f33121f7", "heroku_f76f1b2818ac133", "3306");
if (!$connection) {
    echo "Ошибка БД";
    exit;
}

$check_login = "SELECT id FROM users WHERE login='"."$login"."'";
$check_email = "SELECT id FROM users WHERE email='"."$email"."'";
$result_login = mysqli_query($connection, $check_login);
$result_email = mysqli_query($connection, $check_email);



if (mysqli_num_rows($result_login) > 0) {
    echo "Логин уже занят";
    exit;

}
else if (mysqli_num_rows($result_email) > 0){
    echo "Аккаунт с таким email существует";
    exit;

}
else {
    $query = "INSERT INTO `users` (login, hash_pswd, email) VALUES ('". $login ."','" . $hash . "','" . $email. "')";
    mysqli_query($connection, $query);
    echo "OK";
    exit;

}






?>