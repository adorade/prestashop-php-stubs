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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleConstraintException
     */
    public function __construct(array $catalogPriceRuleIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId[]
     */
    public function getCatalogPriceRuleIds()
    {
    }
}
