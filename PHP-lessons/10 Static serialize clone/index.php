<?php
include 'autoloader.php';

use models\cars\BMW;
use models\cars\Mitsubishi;
use models\snowSport\Ski;
use models\living\Human;
use models\living\Bear;



//=============== STATIC
/*$mitsubishi = new Mitsubishi();

$mitsubishi->getText();
echo '<br/>';
$mitsubishi->getStaticText();

echo '<br/>';
Mitsubishi::who();
echo '<br/>';
Mitsubishi::whoami(); */
//=========================


//============================= CLONE(не ====)
/*$mitsubishi = new Mitsubishi();
$cloneMitsubishi = clone $mitsubishi;

$a2 = $mitsubishi;
var_dump($mitsubishi);
echo '<br/>';
var_dump($mitsubishi === $a2);
$a2->setColor('new color a');
echo '<br/>';
var_dump($mitsubishi);
echo '<br/>';

var_dump($cloneMitsubishi===$mitsubishi);
echo '<br/>';
$cloneMitsubishi->setColor('color for clone');
var_dump($cloneMitsubishi);

class A{
    function __construct()
    {
        echo 1111111;
    }
    private function __clone()  //запрещаем клонирование
    {
        // TODO: Implement __clone() method.
    }

}
echo '<br/>';
$a=new A();

$cloneA = clone $a; //потому что запретили
*/

//======================================= Serislize - перевод объекта в строку(для передачи) - Только свойства нет метода
$mitsubishi = new Mitsubishi();

/*$array = [1,2,3,4,5];
print_r($array);
echo '<br/>';
echo serialize($array);
$sArray = serialize($array);
echo '<br/>';
print_r(unserialize($sArray)); //обратно сериализация
echo '<br/>';
echo '<br/>';
echo '<br/>';

var_dump($mitsubishi);
echo '<br/>';
$objSerialize = serialize($mitsubishi);
var_dump($objSerialize);
$mitsubishi = unserialize($objSerialize);
$mitsubishi->setColor('White');
echo '<br/>';

var_dump($mitsubishi); */

//$stringObject = 'O:22:"models\Cars\Mitsubishi":1:{s:8:"*color";s:5:"Black";}';
//$mitsubishi = unserialize($stringObject);
echo '<br/>';
var_dump($mitsubishi);  //бывают ошибки что то неправильно - поэому лучше зашифровать!
echo '<br/>';
echo '<br/>';
echo '<br/>';
$toSave =base64_encode(serialize($mitsubishi)); //шифруем сериализацию
echo ($toSave);
$fromSave =unserialize(base64_decode(' TzoyMjoibW9kZWxzXENhcnNcTWl0c3ViaXNoaSI6MTp7czo4OiIAKgBjb2xvciI7czo1OiJCbGFjayI7fQ== ' ));
var_dump($fromSave);
echo '<br/>';
echo $fromSave->setColor('f');
echo $fromSave->getColor();
exit;