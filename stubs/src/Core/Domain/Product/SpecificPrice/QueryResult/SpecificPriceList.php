<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult;

/**
 * Transfer SpecificPrice list data
 */
class SpecificPriceList
{
    /**
     * @param SpecificPriceForListing[] $specificPrices
     * @param int $totalSpecificPricesCount
     */
    public function __construct(array $specificPrices, int $totalSpecificPricesCount)
    {
    }
    /**
     * @return SpecificPriceForListing[]
     */
    public function getSpecificPrices(): array
    {
    }
    /**
     * @return int
     */
    public function getTotalSpecificPricesCount(): int
    {
    }
}
