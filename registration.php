<?php
    
if (isset($_POST['login']))
{
    $login = $_POST['login'];
    if ($login == '')
    {

        echo "Введите, пожалуйста, логин!";

        unset($login);
    }
    else
    {
        echo " login is $login <br>";

    }
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['pass']))
{
    $password=$_POST['pass'];
    if ($password =='')
    {
        echo "Введите, пожалуйста, пароль!";
        unset($password);
    }
    else
    {
        echo "password is $password";


    }
}
if (isset($_POST['emailAddress']))
{
    $emailAddr=$_POST['emailAddress'];
    if ($emailAddr =='')
    {
        echo "Введите, пожалуйста, email!";
        unset($emailAddr);
    }
    else
    {
        echo "email is $emailAddr";


    }
}
//$login = stripslashes($login);
//$login = htmlspecialchars($login);
//$password = stripslashes($password);
//$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = str_replace(' ', '', $login);;
$password = str_replace(' ', '', $password);;

echo "new login is $login";
echo "new pass is $password";
$hash = password_hash($password, PASSWORD_BCRYPT);
echo "hash is $hash";

$connection = mysqli_connect("localhost", "admin", "admin", "funeng", "3306");
if (!$connection) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Соединение с MySQL установлено!" . PHP_EOL;

$checklogin = "SELECT id FROM users WHERE login='"."$login"."'";
$checkemail = "SELECT id FROM users WHERE email='"."$emailAddr"."'";
$resultlogin = mysqli_query($connection, $checklogin);
$resultemail = mysqli_query($connection, $checkemail);



if (mysqli_num_rows($resultlogin) > 0) {
    echo "Такой логин уже существует". PHP_EOL;
    exit;
}
else if (mysqli_num_rows($resultemail) > 0){
    echo "Такой email уже существует!". PHP_EOL;
    exit;
}
else {
    $query = "INSERT INTO `users` (login, hash_pswd, email) VALUES ('". $login ."','" . $hash . "','" . $emailAddr. "')";
    mysqli_query($connection, $query);
    echo "Поздравляем, Вы успешно зарегистрировались!".PHP_EOL;

}

?>