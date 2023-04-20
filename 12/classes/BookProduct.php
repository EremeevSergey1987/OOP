<?php
namespace classes;
use vendor\wfm\interfaces\I3D;
use vendor\wfm\Product;

class BookProduct extends Product implements I3D
{
    public $numPages;
    const TEST = 20;
    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(50);
        var_dump(self::class);

    }

    public function test()
    {
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

    public function addProduct($name, $price, $pages = 0)
    {
        var_dump($name);
        var_dump($price);
        var_dump($pages);
    }

}