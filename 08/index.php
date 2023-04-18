<?php
require_once 'classes/Product.php';
require_once 'classes/NoutbookProduct.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Колобок', 100, 888);
$noutbook = new NoutbookProduct('Dell', 30000, 'intel');

print_r($book);
print_r($noutbook);

echo $book->getProduct('book');
echo $noutbook->getProduct();