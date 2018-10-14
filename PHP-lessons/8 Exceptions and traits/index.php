<?php

//вместо include используем require_once - убирает ошибку двойного использования
require_once 'Car.php';
require_once 'Mitsubishi.php';
require_once 'BMW.php';
require_once 'LancerEvolution.php';
require_once 'Ski.php';
require_once 'Human.php';
require_once 'Bear.php';

$ski = new Ski();
$mitsubishi = new Mitsubishi('green');


$human = new Human();
$bear = new Bear();

$human->run(10);
echo '<br/>';
$bear->run(15);







//================================ Exception
/*try {
    $human->drive($mitsubishi);
}
 catch (RedColorCarException $exception) {
    $mitsubishi->setColor('grey');
    $human->drive($mitsubishi);
 }
 /*catch (GreenColorCarException $exception) {
    echo 'Зеленая ошибка';
 }*/

 /*catch (Exception $exception) {
     echo 'Общая ошибка';
 } */











//======================================
/*function salesManagerDo($variable)
{
    if ($variable == 0) {
        throw new Exception('user 1 send 0');
    }
}

try {
    salesManagerDo(0);   //выполняет 0
} catch (Exception $exception) {  //ловит ошибку
    echo $exception->getMessage();  //пишет ошибка
}
finally {              //можно без finally, все равно сделается
    echo '<br/>';
    echo 111111;
} */

//========================================







