<?php
require_once "vendor/autoload.php";

use IrisSG\Test\ExcelConverter;
use IrisSG\Test\DisplayExcelColumns;

// Check if at least one command-line argument is provided
if (count($argv) < 2) {
    echo "Please provide at least one value to be converted as argument.\n";
    exit(1);
}


$arguments = $argv;
// lets remove the caller file
array_shift($arguments);

$converter = new ExcelConverter();
$convertedExcelColumnToConsole = new DisplayExcelColumns();

foreach($arguments as $argument) {
    echo $convertedExcelColumnToConsole->format(
        columnToBeConverted: $argument,
        conversionResult: (is_numeric($argument) ? $converter->numberToTitle($argument) : $converter->titleToNumber($argument))
    );
}