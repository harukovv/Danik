<?php
    try{
        $user = "root";
        $password = "";
        $db = "user";
        $host = "localhost";
        $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user , $password);
    }
    catch(PDOException $e){
        echo "Нет подключение к базе данных";
    }
    $sql = "SELECT * FROM `User` WHERE `login`='".$_POST['login']."' AND `password`='".$_POST['password']."' ";
    $result = $pdo -> query($sql);
    if($result ->fetchColumn() > 0){
        echo "1";
    }else{
        echo "0";
    }

?>