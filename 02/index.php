<?php
error_reporting(-1);
require_once 'classes/Car.php';

$objCar = new File();
$objCar_mazda = new File();

print_r($objCar);

$objCar->color = 'red';
$objCar->brand = 'BMW';
$objCar->speed = 200;
$objCar->year = 2020; // так не особо нужно делать


$objCar_mazda->color = 'gray';
$objCar_mazda->brand = 'mazda';
$objCar_mazda->speed = 180;

print_r($objCar);
print_r($objCar_mazda);

echo 'О моем авто!' . PHP_EOL;
echo 'Марка: '  . $objCar->brand . PHP_EOL;
echo 'Количество колес: '  . $objCar->whels . PHP_EOL;
echo 'Скорость: '  . $objCar->speed . PHP_EOL;
echo 'Цвет: '  . $objCar->color . PHP_EOL;