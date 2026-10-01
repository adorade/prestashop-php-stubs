<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject;

/**
 * Provides catalog price rule id
 */
final class CatalogPriceRuleId
{
    /**
     * @param int $catalogPriceRuleId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleConstraintException
     */
    public function __construct(int $catalogPriceRuleId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
