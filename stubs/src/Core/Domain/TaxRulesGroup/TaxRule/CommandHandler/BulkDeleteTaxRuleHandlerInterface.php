<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler;

/**
 * Defines contract for bulk deleting tax rules
 */
interface BulkDeleteTaxRuleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\BulkDeleteTaxRuleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\BulkDeleteTaxRuleCommand $command): void;
}
