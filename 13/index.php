<?php

use app\BookProduct;
use app\NoutbookProduct;

require_once __DIR__ . '/vendor/autoload.php';

$notebook = new NoutbookProduct('DELL', 35000, 'intel');
$book = new BookProduct('Колобок', 100, 888);
print_r($notebook);

$mail = new \PHPMailer\PHPMailer\PHPMailer();
print_r($mail);
