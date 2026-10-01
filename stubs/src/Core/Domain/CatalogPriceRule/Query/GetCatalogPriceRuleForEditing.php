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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleConstraintException
     */
    public function __construct($catalogPriceRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
     */
    public function getCatalogPriceRuleId(): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
    {
    }
}
