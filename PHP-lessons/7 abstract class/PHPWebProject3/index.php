<?php

//вместо include используем require_once - убирает ошибку двойного использования
require_once 'Car.php';
require_once 'Mitsubishi.php';
require_once 'BMW.php';
require_once 'LancerEvolution.php';
require_once 'Ski.php';
require_once 'Human.php';

$ski = new Ski();
$mitsubishi = new Mitsubishi();
$human = new Human();

$ski->start();
$mitsubishi->start();
$human->drive($ski);



