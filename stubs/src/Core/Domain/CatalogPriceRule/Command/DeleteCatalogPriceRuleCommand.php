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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleConstraintException
     */
    public function __construct($catalogPriceRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
     */
    public function getCatalogPriceRuleId()
    {
    }
}
