<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler;

/**
 * Defines contract for delete tax rules group handler
 */
interface DeleteTaxRulesGroupHandlerInterface
{
    /**
     * @param DeleteTaxRulesGroupCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\DeleteTaxRulesGroupCommand $command): void;
}
