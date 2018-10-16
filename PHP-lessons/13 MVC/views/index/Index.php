<?php
// вывод данных

var_dump($mitsubishi);
echo '<br/>';
var_dump($mitsubishi->getColor());

foreach ($users as $user) {
    echo $user['name']."<br/>";
}