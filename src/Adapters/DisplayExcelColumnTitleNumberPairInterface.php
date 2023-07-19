<?php

namespace IrisSG\Test\Adapters;

interface DisplayExcelColumnTitleNumberPairInterface
{
    public function format(string $columnToBeConverted, string $conversionResult): string;
}