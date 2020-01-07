<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

use ReadCSV\ReadCSV;

$readCSV = new ReadCSV($con);

$result = $readCSV->readFile(__DIR__ . '/file/file.csv');

print_r($result);
