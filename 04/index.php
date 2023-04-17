<?php
error_reporting(-1);
require_once 'classes/Car.php';

$objCar = new File('grey', 4, 180, 'volvo');
$objCar_mazda = new File('silver', 4, 280, 'BMW');

echo $objCar->getCarInfo();
echo $objCar_mazda->getCarInfo();

