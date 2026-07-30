<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult;

class ReferenceCurrency
{
    /**
     * @param string $isoCode
     * @param string $numericIsoCode
     * @param array $names
     * @param array $symbols
     * @param array $patterns
     * @param int $precision
     */
    public function __construct(string $isoCode, string $numericIsoCode, array $names, array $symbols, array $patterns, int $precision)
    {
    }
    /**
     * Currency ISO code
     *
     * @return string
     */
    public function getIsoCode(): string
    {
    }
    /**
     * Currency numeric ISO code
     *
     * @return string
     */
    public function getNumericIsoCode(): string
    {
    }
    /**
     * Currency's names, indexed by language id.
     *
     * @return array
     */
    public function getNames(): array
    {
    }
    /**
     * Currency's names, indexed by language id.
     *
     * @return array
     */
    public function getSymbols(): array
    {
    }
    /**
     * Currency's patterns, indexed by language id.
     *
     * @return array
     */
    public function getPatterns(): array
    {
    }
    /**
     * Currency decimal precision
     *
     * @return int
     */
    public function getPrecision(): int
    {
    }
}
