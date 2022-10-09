<?php


require_once 'Car.php';
$car = new Car('blue', 5, 'gasoline');
var_dump($car);

echo $car->start();

$car->accelerate(20);
var_dump($car);

echo $car->brake(20);
var_dump($car);
