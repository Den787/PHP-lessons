<?php


include 'Car.php';
include 'Mitsubishi.php';
include 'BMW.php';
include 'LancerEvolution.php';

$car =new Car('Honda');
//$car(5);
// $car->printX();
$car->bar();

$mitsubishi =new Mitsubishi('Mitsubishi');
echo '<br/>';
$mitsubishi->bar();
echo '<br/>';
echo $car->getBrand();
echo '<br/>';
$car->brand = 'KIA';
echo $car->brand;



/* echo $car->getColor();

$mitsubishi = new Mitsubishi();
echo '<br/>';
echo $mitsubishi->getColor();
$mitsubishi->setColor('white');
echo '<br/>';
echo $mitsubishi->getColor();  */



