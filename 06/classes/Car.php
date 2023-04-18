<?php

class Car
{
    public $color;
    public $whels = 4;
    public $speed = 180;
    public $brand;

    const COUNT_WHEELS = 4;
    const COLOR_WHEELS = 'black';


    public static $countCar = 0;

    /**
     * @param $color
     * @param int $whels
     * @param int $speed
     * @param $brand
     */
    public function __construct($color, $whels, $speed, $brand)
    {
        $this->color = $color;
        $this->whels = $whels;
        $this->speed = $speed;
        $this->brand = $brand;
        self::$countCar++;
    }
    public static function getCount()
    {
        return self::$countCar;
    }
    public function test()
    {
        echo 'hellow';
    }
    public function getCarInfo()
    {
        return "<h3>О моем авто:</h3>
        Марка: {$this->brand}
        Скорость: {$this->speed} <br />
        Количество колес: {$this->whels} <br />
        Цвет: {$this->color} <br />
        ";
    }
    public function getPrototipe()
    {
        return "<h3>Данные тестового авто:</h3>
        Количество колёс: " . self::COUNT_WHEELS . "
        Цвет колёс: " . self::COLOR_WHEELS . "
        ";
    }
}