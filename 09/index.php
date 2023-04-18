<?php
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Колобок', 100, 888);
//print_r($book);


echo $book->getProduct('book');
echo $book->getDiscount();



//print_r($book->public);
//echo $book->price . PHP_EOL;
//echo $book->getPrice();
