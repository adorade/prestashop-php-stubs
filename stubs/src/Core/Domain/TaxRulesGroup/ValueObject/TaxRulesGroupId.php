<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject;

/**
 * Provide tax rules group id
 */
class TaxRulesGroupId
{
    /**
     * @param int $id
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupConstraintException
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
