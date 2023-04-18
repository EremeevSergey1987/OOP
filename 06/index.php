<?php
error_reporting(-1);
require_once 'classes/Car.php';

$objCar = new Car('grey', 4, 180, 'volvo');
$objCar_mazda = new Car('silver', 4, 280, 'BMW');
$objCar_mazda = new Car('silver', 4, 280, 'BMW');

echo $objCar->getCarInfo();
echo $objCar_mazda->getCarInfo();

echo Car::$countCar;
echo Car::getCount();
echo $objCar->test();

echo $objCar->getPrototipe();
echo Car::COUNT_WHEELS;
echo Car::class;
