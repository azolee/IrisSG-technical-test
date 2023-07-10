<?php

namespace IrisSG\Test;

use IrisSG\Test\Adapters\DisplayExcelColumnTitleNumberPairInterface;
use IrisSG\Test\Adapters\DisplayOnTerminalAdapter;

class DisplayExcelColumns
{
    /**
     * @param DisplayExcelColumnTitleNumberPairInterface $displayAdapter
     */
    public function __construct(
        protected DisplayExcelColumnTitleNumberPairInterface $displayAdapter = new DisplayOnTerminalAdapter()
    ) {}

    /**
     * @param string $columnToBeConverted
     * @param string $conversionResult
     * @return string
     */
    public function format(string $columnToBeConverted, string $conversionResult): string
    {
        return $this->displayAdapter->format($columnToBeConverted, $conversionResult);
    }

    /**
     * @param DisplayExcelColumnTitleNumberPairInterface $displayAdapter
     */
    public function setDisplayAdapter(DisplayExcelColumnTitleNumberPairInterface $displayAdapter): void
    {
        $this->displayAdapter = $displayAdapter;
    }
}