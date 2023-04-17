<?php
require_once 'classes/File.php';

$file = 'test.txt';
$text = date('y-m-d-m-s') . "\n";

$objFile = new File($file);
$objFile->write($text);
