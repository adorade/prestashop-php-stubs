<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler;

/**
 * Defines contract for bulk toggle tax rules group status handler
 */
interface BulkToggleTaxRulesGroupStatusHandlerInterface
{
    /**
     * @param BulkSetTaxRulesGroupStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\BulkSetTaxRulesGroupStatusCommand $command): void;
}
