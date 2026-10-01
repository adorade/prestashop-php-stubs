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
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupConstraintException
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
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId[]
     */
    public function getTaxRulesGroupIds(): array
    {
    }
}
