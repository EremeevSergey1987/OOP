<?php

use classes\BookProduct;
use classes\NoutbookProduct;
use vendor\wfm\interfaces\IGadget;

function autoloader($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}
spl_autoload_register('autoloader' );





$notebook = new NoutbookProduct('DELL', 35000, 'intel');
$book = new BookProduct('Колобок', 100, 888);
//var_dump($notebook instanceof IGadget);


print_r($book);
print_r($notebook);

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

offerCase($notebook);
//offerCase($book);





