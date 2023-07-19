<?php

namespace IrisSG\Test\Adapters;

class DisplayAsHtmlAdapter implements DisplayExcelColumnTitleNumberPairInterface
{
    public function format(string $columnToBeConverted, string $conversionResult): string
    {
        return "<p><strong>".$columnToBeConverted . ":</strong> " . $conversionResult . "</p>";
    }
}