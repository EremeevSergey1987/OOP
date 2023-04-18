<?php
class Product
{
    private $name;
    protected $price;

    public $public = "public";
    protected $protected = "protected";
    private $private = "private";

    protected $discount = 0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getProduct()
    {
        return "<hr><b>О товаре</b><br /> 
        Наиенование: {$this->name} <br /> 
        
        ";
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
