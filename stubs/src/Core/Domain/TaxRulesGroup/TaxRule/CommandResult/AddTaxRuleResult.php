<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandResult;

/**
 * Result of adding a tax rule.
 * Contains the tax rules group id which may have changed due to historization.
 */
class AddTaxRuleResult
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId the (potentially new) group id after historization
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId[] $taxRuleIds the ids of the tax rule(s) actually created (can be fewer than requested
     *                                when a country/state pair already had a unique rule)
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, array $taxRuleIds = [])
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
