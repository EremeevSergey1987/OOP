<?php
class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getProduct()
    {
        return "<hr><b>О товаре</b><br /> 
        Наиенование: {$this->name} <br /> 
        Цена: {$this->price} <br /> ";
    }
}
