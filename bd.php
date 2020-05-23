<?php
    header('Content-Type: text/html; charset=utf-8');
 
    $server = "localhost"; /* имя хоста*/
    $username = "root"; /* Имя пользователя БД */
    $password = ""; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
    $database = "delaweb_users"; /* Имя базы данных, которую создали */
     
    // Подключение к базе данный через MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);
 
    // Проверка подключения
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }
 
    // Кодировка подключения
    $mysqli->set_charset('utf8');
 
    //Адресс сайта
    $address_site = "http://testsite.local";
?>