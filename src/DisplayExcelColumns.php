<?php

namespace IrisSG\Test;

use IrisSG\Test\Strategies\DisplayExcelColumnTitleNumberPairInterface;
use IrisSG\Test\Strategies\DisplayOnTerminal;

class DisplayExcelColumns
{
    /**
     * @param DisplayExcelColumnTitleNumberPairInterface $displayStrategy
     */
    public function __construct(
        protected DisplayExcelColumnTitleNumberPairInterface $displayStrategy = new DisplayOnTerminal()
    ) {}

    /**
     * @param string $columnToBeConverted
     * @param string $conversionResult
     * @return string
     */
    public function format(string $columnToBeConverted, string $conversionResult): string
    {
        return $this->displayStrategy->format($columnToBeConverted, $conversionResult);
    }

    /**
     * @param DisplayExcelColumnTitleNumberPairInterface $displayStrategy
     */
    public function setDisplayStrategy(DisplayExcelColumnTitleNumberPairInterface $displayStrategy): void
    {
        $this->displayStrategy = $displayStrategy;
    }
}