<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command;

/**
 * Command responsible for deleting a single tax rule
 */
class DeleteTaxRuleCommand
{
    /**
     * @param int $taxRuleId
     */
    public function __construct(int $taxRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
     */
    public function getTaxRuleId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
    {
    }
}
