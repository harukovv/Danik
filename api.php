<?php
    try {
        $user = 'root'; // пользователь
        $password = ''; // пароль
        $db = 'user'; // название бд
        $host = 'localhost'; // хост
        $charset = 'UTF-8'; // кодировка
        $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user, $password);// Создаём подключение
    } 
    catch(PDOException $e) { // отслеживание ошибок 
        echo "Нет соединения c базой данных"; 
    }
    $sql = "INSERT INTO `User`(`name`, `lastname`, `middlename`, `login`, `password`, `phone`, `email`) VALUES ('".$_POST['name']."','".$_POST['lastname']."','".$_POST['middlename']."','".$_POST['login']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."');";
    $result = $pdo->query($sql);
?>