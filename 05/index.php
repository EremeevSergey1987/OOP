<?php
require_once 'classes/File.php';

$filename = 'test.txt';
$somecontent = date('y-m-d-m-s') . "\n";

$objFile = new File($filename, $somecontent);
$objFile->fileWrite();
