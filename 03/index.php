<?php
error_reporting(-1);
require_once 'classes/Car.php';

$objCar = new File();
$objCar->brand = 'MAZDA';
$objCar->color = 'GRAY';

$objCar_mazda = new File();
$objCar_mazda->brand = 'BMW';

echo $objCar->getCarInfo();

echo $objCar_mazda->getCarInfo();

