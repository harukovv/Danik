<?php
try {
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "user";
    $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user , $password);
} catch(PDOException $e) {
    echo "Ошибка подключения с базой данных";
}
$sql = "INSERT INTO orders (NameBook, AuthorBook, DateOrder, BookIzdan) VALUES ('".$_POST['NameBook']."','".$_POST['AuthorBook']."','".$_POST['DateOrder']."','".$_POST['BookIzdan']."' );";
$result = $pdo->query($sql);
echo $sql;
$maj = "SELECT * FROM orders WHERE 1";
$output = $pdo->query($maj);
foreach($output as $row){
    echo $row["NameBook"]."/n";
}
?>