<?php
include 'autoloader.php';



use models\patterns\DBConnection;
use models\patterns\CarFactory;
use models\patterns\Exoskeleton;
use models\living\Human;
use models\patterns\Computer;
use models\patterns\computerBlocks\VideoCard;
use models\patterns\computerBlocks\Processor;
use models\patterns\computerBlocks\Monitor;
use models\patterns\computerBlocks\KeyBoard;

//================================DB Connection
$db = DBConnection::getInstance();
$db->setPort('3306');
echo $db->getPort();
echo '<br/>';
var_dump($db);

//$db1 = new DBConnection(); ошибка! нельзя!

$db1 = DBConnection::getInstance();
echo '<br/>';
var_dump($db1);
$db1->setPort('99');
echo '<br/>';
var_dump($db);
echo '<br/> =================================================================<br/>';
//=====================================  end

//==================================CarFactory
$carFactory = new CarFactory();

$bmw = $carFactory->createCar('BMW');
$mitsubishi = $carFactory->createCar('Mitsubishi');

var_dump($bmw);
echo '<br/>';
var_dump($mitsubishi);
echo '<br/> =================================================================<br/>';
//========================================  end

//=========================================== WRAPPER
$human = new Human();
$human->move();
echo '<br/>';
$exoskeleton = new Exoskeleton($human);
$exoskeleton->move();
echo '<br/> =================================================================<br/>';
//========================================  end

//============================================== FACADE(Composition)
$computer = new Computer(new Processor(), new VideoCard(), new Monitor(), new KeyBoard());

$computer->setInfo(5);
$computer->getInfo();


//изучить декаратор и абсервер

