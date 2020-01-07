<?php

require __DIR__ . '/vendor/autoload.php';

use ReaderFile\ReadCSV;

$readCSV = new ReadCSV();

$result = $readCSV->readFile(__DIR__ . '/file/file.csv');

print_r($result);
