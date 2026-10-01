<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Query;

/**
 * Query to get tax rule data for editing
 */
class GetTaxRuleForEditing
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
