<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult;

/**
 * Transfer CatalogPriceRule list data
 */
class CatalogPriceRuleList
{
    /**
     * @param CatalogPriceRuleForListing[] $catalogPriceRules
     * @param int $totalCount;
     */
    public function __construct(array $catalogPriceRules, int $totalCount)
    {
    }
    /**
     * @return CatalogPriceRuleForListing[]
     */
    public function getCatalogPriceRules(): array
    {
    }
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
    }
}
