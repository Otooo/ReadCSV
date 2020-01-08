# What's this
A library that reads the content of some types of files and returns an array containing this data.

## Requirements
* PHP >= 4.2.0
* Composer

## Installation
In project folder:

```
composer require oto/reader-file
```

## Readable files
* CSV

## How to use
```
<?php

use ReaderFile\ReadCSV;

...
{
    ...() 
    {
        $filePath = 'path of the file';
        try {
            $result = ReadCSV::readFile($filePath, 'delimiter, default is ;');
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
        echo $result;
    }
}
```

### Simplifying
```
ReaderFile\ReadCSV::readFile('filePath', 'delimiter, default is ;');
```
