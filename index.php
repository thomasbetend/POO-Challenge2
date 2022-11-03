<?php

require_once('Bicycle.php');
require_once('Car.php');
require_once('Truck.php');

$bike = new Bicycle('red', 15);
$car1 = new Car('blue', 3, 'SP95');

$truck1 = new Truck('green', 3, 'gasoil', 40);

$truck1->setLoading(78);

$truck1->setCurrentSpeed(80);

echo $truck1->fillingTruck();
echo "<br>" . $truck1->start();
$truck1->setCurrentSpeed(80);

echo "<br>" . $truck1->forward();
echo "<br>" . $truck1->brake();

var_dump($truck1);





