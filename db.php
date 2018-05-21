<?php
$connection = mysqli_connect("localhost", "admin", "admin", "funeng", "3306");

if (!$connection) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($connection) . PHP_EOL;

if ($result = mysqli_query($connection, 'select login from `users` where id = 1')){
    printf("Select returned %d rows.\n", mysqli_num_rows($result));
    mysqli_free_result($result);
}

mysqli_close($connection);

