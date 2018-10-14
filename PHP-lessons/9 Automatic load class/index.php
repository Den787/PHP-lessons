<?php


/*

// автоподключение классов, но тоже муторно все пути прописывать
 function myAutoload($class) {    //заменяет ручное подключение
         if (file_exists($class . '.php')) {
             require_once $class . '.php';
         }
 }

 function autoloadForModels($class){
     if (file_exists('models/' .$class . '.php')) {
         require_once 'models/' .$class . '.php';
     }
 }


spl_autoload_register('myAutoload');
spl_autoload_register('autoloadForModels');
//spl_autoload_register('autoloadForModels', true, true);  делает 2-м по порядку





//вместо include используем require_once - убирает ошибку двойного использования
/*require_once 'Car.php';
require_once 'Mitsubishi.php';
require_once 'BMW.php';
require_once 'LancerEvolution.php';
require_once 'Ski.php';
require_once 'Human.php';
require_once 'Bear.php'; */

/*$ski = new Ski();
$human = new Human();
$bear = new Bear();

//$bmw = new BMW();
var_dump($human);
echo '<br/>';
var_dump($bear);







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

/*namespace t1;

class A{
    public function f() {
        echo 1;
    }

   }

//$a = new A;
//$a->f();

namespace t2;

class A{
    public function f() {
        echo 2;
    }

}
//$a = new A;
//$a->f();


//namespace globality; выводит все данные(методы) по всем namespace


/*namespace t1;  первый вариант
use t2;

$a = new A();
$a->f();

$a = new t2\A();

$a->f();*/

/*namespace globality;  //второй вариант с алиасами

use t1\A as A1;
use t2\A as A2;

$a = new A1();
$a->f();

$a = new A2();
$a->f(); */


//=============================================

include 'autoloader.php';



use models\cars\BMW;
use models\snowSport\Ski;
//use models\living\Human;
//use models\living\Bear;


//include "models/snowSport/Ski.php"; autoloader Отрабатывает если не находит тут
//include "models/living/Human.php";  почему то не работает, что то не прописано
//include "models/living/Bear.php";
//include "models/cars/Bmw.php";


$ski = new Ski();
$bmw = new BMW();
//$human = new Human();
//$bear = new Bear();

var_dump($ski);
echo '<br/>';
var_dump($bmw);
