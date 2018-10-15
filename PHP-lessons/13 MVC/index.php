<?php
include 'autoloader.php';

use models\patterns\DBConnection;

$db = DBConnection::getInstance();
var_dump($db);

$db->query('Insert into user (name, age, sex, phone) values ('Anya, 23, 1, 9999')'); //добавляем
$db->query('Update user SET name="Olya" WHERE name ="Anya"'); //изменяем
$db->query('Delete from user WHERE name = "Anya"');

//$result = $db->query('Select * from user order by name')->fetch_all(); //индексированный массив немного не то --данные с 0
$result = $db->query('Select * from user order by name');
$data = mysqli_fetch_all($result,MYSQLI_ASSOC); //ассоциативный массив - данные как надо
var_dump($result);

foreach ($result as $itemResult) {              //делаем красоту
    echo $itemResult['name']. ' age: '.$itemResult['age'].'<br/>';
}