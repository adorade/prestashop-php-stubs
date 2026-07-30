<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler;

/**
 * Defines contract for edit tax rules group handler
 */
interface EditTaxRulesGroupHandlerInterface
{
    /**
     * @param EditTaxRulesGroupCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\EditTaxRulesGroupCommand $command): void;
}
