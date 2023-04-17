<?php

class Car
{
    public $color;
    public $whels = 4;
    public $speed = 180;
    public $brand;

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

    public function __destruct()
    {
        print_r($this);
    }


}