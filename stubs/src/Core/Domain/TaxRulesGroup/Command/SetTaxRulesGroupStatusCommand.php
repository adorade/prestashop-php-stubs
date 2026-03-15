<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command;

/**
 * Command for setting single tax rules group status
 */
class SetTaxRulesGroupStatusCommand
{
    /**
     * @param int $taxRulesGroupId
     * @param bool $expectedStatus
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function __construct(int $taxRulesGroupId, bool $expectedStatus)
    {
    }
    /**
     * @return TaxRulesGroupId
     */
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
}
