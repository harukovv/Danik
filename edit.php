<?php
try{
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "user";
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
}
catch(PDOException $e){
    echo "Нет подключение с базой данных";
}
     $sql = "UPDATE orders SET `NameBook`='".$_POST['NameBook']."',`AuthorBook`='".$_POST['AuthorBook']."',`DateOrder`='".$_POST['DateOrder']."',`BookIzdan`='".$_POST['BookIzdan']."' WHERE `IDOrder`='".$_POST['id']."'";
     $result = $pdo->query($sql);
     echo $sql




?>