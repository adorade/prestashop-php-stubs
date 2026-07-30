<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query;

/**
 * Provides data transfer object for editing CatalogPriceRule
 */
class GetCatalogPriceRuleForEditing
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
    public function getCatalogPriceRuleId(): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
    {
    }
}
