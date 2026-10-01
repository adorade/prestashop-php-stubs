<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler;

/**
 * Defines contract for adding a tax rule
 */
interface AddTaxRuleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\AddTaxRuleCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandResult\AddTaxRuleResult
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\AddTaxRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandResult\AddTaxRuleResult;
}
