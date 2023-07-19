<?php
declare(strict_types=1);

namespace ExcelConverter;

use PHPUnit\Framework\TestCase;
use IrisSG\Test\ExcelConverter as ExcelConverterService;

final class ExcelConverter extends TestCase
{
    private ExcelConverterService $converter;
    protected function setUp(): void
    {
        $this->converter = new ExcelConverterService();
        parent::setUp();
    }

    public function testExcelConverterConvertsCorrectly(): void
    {
        $this->assertTrue(
            $this->converter->titleToNumber("A") === 1
        );

        $this->assertTrue(
            $this->converter->titleToNumber("AA") === 27
        );

        $this->assertTrue(
            $this->converter->titleToNumber("AB") === 28
        );

        $this->assertTrue(
            $this->converter->numberToTitle(1) === "A"
        );

        $this->assertTrue(
            $this->converter->numberToTitle(27) === "AA"
        );

        $this->assertTrue(
            $this->converter->numberToTitle(28) === "AB"
        );
    }

    public function testMakeSureTheTestedStringIsNotCaseSensitive()
    {
        $this->assertTrue(
            $this->converter->titleToNumber("A") === $this->converter->titleToNumber("a")
        );

        $this->assertTrue(
            $this->converter->titleToNumber("AA") === $this->converter->titleToNumber("aa")
        );

        $this->assertTrue(
            $this->converter->titleToNumber("BA") === $this->converter->titleToNumber("ba")
        );

        $this->assertTrue(
            $this->converter->titleToNumber("bA") === $this->converter->titleToNumber("bA")
        );
    }
}