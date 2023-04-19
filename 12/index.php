<?php
//require_once 'classes/Product.php';
//require_once 'classes/I3D.php';
//require_once 'classes/IGadget.php';
//require_once 'classes/BookProduct.php';
//require_once 'classes/NoutbookProduct.php';

function autoloader($class)
{
    $file = __DIR__ . "/classes/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}
spl_autoload_register('autoloader');



$book = new BookProduct('Колобок', 100, 888);
$notebook = new NoutbookProduct('DELL', 35000, 'intel');

//var_dump($notebook instanceof IGadget);


print_r($book);
print_r($notebook);

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

offerCase($notebook);
offerCase($book);

class A{};
class B extends A{};
class C{};

$a = new A;
$b = new B;
$c = new C;




