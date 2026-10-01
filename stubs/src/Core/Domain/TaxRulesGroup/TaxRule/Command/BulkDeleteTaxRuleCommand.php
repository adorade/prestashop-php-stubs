<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command;

/**
 * Command responsible for bulk deletion of tax rules within a group
 */
class BulkDeleteTaxRuleCommand
{
    /**
     * @param int $taxRulesGroupId
     * @param int[] $taxRuleIds
     */
    public function __construct(int $taxRulesGroupId, array $taxRuleIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
     */
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId[]
     */
    public function getTaxRuleIds(): array
    {
    }
}
