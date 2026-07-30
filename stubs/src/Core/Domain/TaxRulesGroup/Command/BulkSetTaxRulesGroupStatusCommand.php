<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command;

/**
 * Command responsible for multiple tax rules groups status setting
 */
class BulkSetTaxRulesGroupStatusCommand
{
    /**
     * @param array $taxRulesGroupIds
     * @param bool $expectedStatus
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function __construct(array $taxRulesGroupIds, bool $expectedStatus)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
    /**
     * @return TaxRulesGroupId[]
     */
    public function getTaxRulesGroupIds(): array
    {
    }
}
