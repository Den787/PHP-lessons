<?php


include 'Car.php';
include 'Mitsubishi.php';
include 'BMW.php';
include 'LancerEvolution.php';

$car = new Car("BMW", "black",120);
$vaz = new Car("2106", "white",150);

$car->move(70);

print_r($car);
$car->stop();
echo '<br/>';
print_r($car);
echo '<br/>';
$carHonda = new Car('Honda','green',150);

print_r($carHonda);

print_r($vaz);
echo '<br/>';

$newHonda = Car::getCarWithRandomMaxSpeed();
print_r($newHonda);

echo '<br/>';

// echo Car::$_counterofCars;

echo '<br/>';

//значения одной переменной передаются другой по ссылке, если меняем какую то переменную то она меняет все связанные.
$carone = new Car('Honda', 'Black', 300);
$cartwo = $carone;
print_r($carone);
echo '<br/>';
print_r($cartwo);
$cartwo->color = 'yellow';
echo '<br/>';
print_r($cartwo);
echo '<br/>';
print_r($carone);
echo '<br/>';

print_r($carone==$cartwo);
echo '<br/>';
var_dump(boolval($carone==$cartwo));

$a = new Car('Lexus', 'white', 250);
$b = new Car('Lexus', 'white', 250);
$c = $a;
var_dump(boolval($a===$b));
var_dump(boolval($a===$c));
var_dump(boolval($a==$b));
var_dump(boolval($a==$b));
var_dump(boolval($a==$c));
echo '<br/>';


