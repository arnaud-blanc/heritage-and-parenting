<?php

require_once "Car.php";
require_once "Bicycle.php";
require_once "Truck.php";

$bicycle = new Bicycle('blue', 1);

echo $bicycle -> forward();

var_dump($bicycle);


$car = new Car('green', 4, 'electric');

echo $car -> forward();

var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


$myTruck = new Truck(10, "red", 3, "fuel");
var_dump($myTruck);
echo $myTruck -> isItFull() . "<br>";
echo $myTruck -> forward() . "<br>";
echo $myTruck -> brake() . "<br>";
var_dump($myTruck);