<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler;

/**
 * Defines contract for editing a tax rule
 */
interface EditTaxRuleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\EditTaxRuleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\EditTaxRuleCommand $command): void;
}
