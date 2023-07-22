<?php

namespace IrisSG\Test\Strategies;

class DisplayOnTerminal implements DisplayExcelColumnTitleNumberPairInterface
{
    public function format(string $columnToBeConverted, string $conversionResult): string
    {
        return strtoupper($columnToBeConverted) . ": " . $conversionResult . "\n";
    }
}