<?php

class BookProduct extends Product
{
    public $numPages;
    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(50);
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки {$this->price} <br/>";
        $out .= "Цена со скидкой {$this->getPrice()} <br/>";
        $out .= "Скидка {$this->getDiscount()} <br/>";
        return $out;
    }

}