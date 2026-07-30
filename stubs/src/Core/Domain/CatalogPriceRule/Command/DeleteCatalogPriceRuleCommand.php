<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command;

/**
 * Deletes catalog price rule
 */
class DeleteCatalogPriceRuleCommand
{
    /**
     * @param int $catalogPriceRuleId
     *
     * @throws CatalogPriceRuleConstraintException
     */
    public function __construct($catalogPriceRuleId)
    {
    }
    /**
     * @return CatalogPriceRuleId
     */
    public function getCatalogPriceRuleId()
    {
    }
}
