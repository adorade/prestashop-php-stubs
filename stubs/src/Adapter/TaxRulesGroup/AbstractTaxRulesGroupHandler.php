<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup;

/**
 * Provides common methods for tax rules group handlers
 */
abstract class AbstractTaxRulesGroupHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * Gets legacy TaxRuleGroup object
     *
     * @param TaxRulesGroupId $taxRulesGroupId
     *
     * @return TaxRulesGroup
     *
     * @throws TaxRulesGroupNotFoundException
     */
    protected function getTaxRulesGroup(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId): \TaxRulesGroup
    {
    }
    /**
     * Deletes legacy TaxRulesGroup
     *
     * @param TaxRulesGroup $taxRulesGroup
     *
     * @return bool
     *
     * @throws CannotDeleteTaxRulesGroupException
     */
    protected function deleteTaxRulesGroup(\TaxRulesGroup $taxRulesGroup): bool
    {
    }
    /**
     * Set legacy tax rules group status
     *
     * @param TaxRulesGroup $taxRulesGroup
     * @param bool $newStatus
     *
     * @return bool
     *
     * @throws TaxRulesGroupException
     */
    protected function setTaxRulesGroupStatus(\TaxRulesGroup $taxRulesGroup, bool $newStatus)
    {
    }
}
