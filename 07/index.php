<?php
error_reporting(-1);
require_once 'classes/Product.php';

$book = new Product('Колобок', 100, null, 1000 );
$noutbook = new Product('Dell', 30000, 'intel 133 mgz', null);

print_r($book);
print_r($noutbook);

echo $book->getProduct('book');
echo $noutbook->getProduct();