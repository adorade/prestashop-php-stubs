<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler;

/**
 * Defines contract for bulk delete tax rules group handler
 */
interface BulkDeleteTaxRulesGroupHandlerInterface
{
    /**
     * @param BulkDeleteTaxRulesGroupCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\BulkDeleteTaxRulesGroupCommand $command): void;
}
