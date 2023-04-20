<?php
namespace app;
use wfm\interfaces\IGadget;
use wfm\Product;
use wfm\traits\TColor;


class NoutbookProduct extends Product implements IGadget
{
    use TColor;
    public $cpu;
    public function __construct($name, $price, $cpu, $color)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
        $this->color = $color;
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор {$this->cpu} <br/>";
        return $out;
    }
    public function addProduct($name, $price)
    {
    }
}