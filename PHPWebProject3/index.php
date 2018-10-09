<?php

include 'Car.php';
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

echo Car::$_counterofCars;

echo '<br/>'; 