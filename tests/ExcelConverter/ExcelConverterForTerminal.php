<?php

namespace ExcelConverter;

use IrisSG\Test\DisplayExcelColumns;
use IrisSG\Test\ExcelConverter as ExcelConverterService;
use PHPUnit\Framework\TestCase;

class ExcelConverterForTerminal extends TestCase
{
    private ExcelConverterService $converter;

    private DisplayExcelColumns $convertedExcelColumnForTerminal;

    protected function setUp(): void
    {
        $this->converter = new ExcelConverterService();
        $this->convertedExcelColumnForTerminal = new DisplayExcelColumns();

        parent::setUp();
    }

    public function testConverterShowsTheExpectedResultForTerminal()
    {
        $letter = "A";
        $columnNumber = $this->converter->titleToNumber($letter);
        $resultToBeDisplayed = $this->convertedExcelColumnForTerminal->format(
            columnToBeConverted: $letter,
            conversionResult: $columnNumber
        );

        $this->assertSame(
            $resultToBeDisplayed,
            $letter . ": " . $columnNumber . "\n"
        );

        $this->assertNotSame(
            $resultToBeDisplayed,
            strtolower($letter) . ": " . $columnNumber . "\n"
        );
    }
}