<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule;

/**
 * Provides reusable methods for CatalogPriceRule handlers
 */
abstract class AbstractCatalogPriceRuleHandler
{
    /**
     * Gets legacy SpecificPriceRule
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId $catalogPriceRuleId
     *
     * @return \SpecificPriceRule
     */
    protected function getSpecificPriceRule(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId $catalogPriceRuleId): \SpecificPriceRule
    {
    }
    /**
     * Deletes legacy SpecificPriceRule
     *
     * @param \SpecificPriceRule $specificPriceRule
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleException
     */
    protected function deleteSpecificPriceRule(\SpecificPriceRule $specificPriceRule)
    {
    }
    /**
     * @param \DateTime $from
     * @param \DateTime $to
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleConstraintException
     */
    protected function assertDateRangeIsNotInverse(\DateTime $from, \DateTime $to)
    {
    }
}
