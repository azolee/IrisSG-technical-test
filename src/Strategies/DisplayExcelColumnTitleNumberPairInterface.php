<?php

namespace IrisSG\Test\Strategies;

interface DisplayExcelColumnTitleNumberPairInterface
{
    public function format(string $columnToBeConverted, string $conversionResult): string;
}