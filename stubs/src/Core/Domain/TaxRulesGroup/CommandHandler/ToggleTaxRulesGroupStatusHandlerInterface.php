<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler;

/**
 * Defines contract for toggle tax rules group status handler
 */
interface ToggleTaxRulesGroupStatusHandlerInterface
{
    /**
     * @param SetTaxRulesGroupStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\SetTaxRulesGroupStatusCommand $command): void;
}
