<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository;

/**
 * Provides access to TaxRule data source
 */
class TaxRuleRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId $taxRuleId
     *
     * @return \TaxRule
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\TaxRuleNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId $taxRuleId): \TaxRule
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId $taxRuleId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\TaxRuleNotFoundException
     */
    public function assertTaxRuleExists(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId $taxRuleId): void
    {
    }
    /**
     * @param \TaxRule $taxRule
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\CannotAddTaxRuleException
     */
    public function add(\TaxRule $taxRule): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
    {
    }
    /**
     * @param \TaxRule $taxRule
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\CannotUpdateTaxRuleException
     */
    public function update(\TaxRule $taxRule): void
    {
    }
    /**
     * @param \TaxRule $taxRule
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\CannotDeleteTaxRuleException
     */
    public function delete(\TaxRule $taxRule): void
    {
    }
}
