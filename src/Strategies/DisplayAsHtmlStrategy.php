<?php

namespace IrisSG\Test\Strategies;

class DisplayAsHtmlStrategy implements DisplayExcelColumnTitleNumberPairInterface
{
    public function format(string $columnToBeConverted, string $conversionResult): string
    {
        return "<p><strong>".$columnToBeConverted . ":</strong> " . $conversionResult . "</p>";
    }
}