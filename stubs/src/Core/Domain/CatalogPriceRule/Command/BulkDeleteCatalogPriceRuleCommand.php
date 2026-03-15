<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command;

/**
 * Deletes catalog price rules in bulk acton
 */
class BulkDeleteCatalogPriceRuleCommand
{
    /**
     * @param int[] $catalogPriceRuleIds
     *
     * @throws CatalogPriceRuleConstraintException
     */
    public function __construct(array $catalogPriceRuleIds)
    {
    }
    /**
     * @return CatalogPriceRuleId[]
     */
    public function getCatalogPriceRuleIds()
    {
    }
}
