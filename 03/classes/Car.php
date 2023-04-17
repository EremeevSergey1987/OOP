<?php

class Car
{
    public $color;
    public $whels = 4;
    public $speed = 180;
    public $brand;

    public function getCarInfo()
    {
        return "<h3>О моем авто:</h3>
        Марка: {$this->brand} <br />
        Скорость: {$this->speed} <br />
        Количество колес: {$this->whels} <br />
        Цвет: {$this->color}
        ";

    }



}