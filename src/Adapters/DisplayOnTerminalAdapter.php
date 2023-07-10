<?php

namespace IrisSG\Test\Adapters;

class DisplayOnTerminalAdapter implements DisplayExcelColumnTitleNumberPairInterface
{
    public function format(string $columnToBeConverted, string $conversionResult): string
    {
        return strtoupper($columnToBeConverted) . ": " . $conversionResult . "\n";
    }
}