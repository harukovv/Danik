
<?php
//fwefwefwefwefwefwefwefwef;
try {
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "user";
    $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user , $password);
} catch(PDOException $e) {
    echo "Ошибка подключения с базой данных";
}
$maj = "SELECT * FROM orders WHERE 1";
$output = $pdo->query($maj);
echo '<table style="border: 1px solid black; padding: 10px; margin-left: 30px;">';
foreach($output as $row){
    echo '<tr style="border: 2px solid black; padding: 10px;" >';
    echo '<td style="border: 2px solid black; padding: 10px;"><input id="NameBook'.$row["IDOrder"].'" value='.$row["NameBook"].'></td>"';
    echo '<td style="border: 2px solid black; padding: 10px;"><input id="AuthorBook'.$row["IDOrder"].'" value='.$row["AuthorBook"].'></td>"';
    echo '<td style="border: 2px solid black; padding: 10px;"><input id="DateOrder'.$row["IDOrder"].'" value='.$row["DateOrder"].'></td>"';
    echo '<td style="border: 2px solid black; padding: 10px;"><input id="BookIzdan'.$row["IDOrder"].'" value='.$row["BookIzdan"].'></td>"';
    echo '<td style="border: 2px solid black; padding: 10px;"><button class="uzm" id='.$row["IDOrder"].'>Изменить</button></td>';
    
    echo "</tr>";
}
echo "</table>";
?>