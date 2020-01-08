<?php 

namespace ReaderFile;

abstract class Reader
{
    /**
     * Class constructor
     */
    public function __construct(){}

    /**
     * Reads the content of a file and storages
     * in an array so then returns.
     *
     * The array format is: array[row][header] => collumn
     *
     * @param filepath Path of file to read
     * @return content array of values
     */
    abstract protected static function readFile($filepath, $delimiter=';');
}
