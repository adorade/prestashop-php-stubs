<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler;

/**
 * Defines contract for add tax rules group handler
 */
interface AddTaxRulesGroupHandlerInterface
{
    /**
     * @param AddTaxRulesGroupCommand $command
     *
     * @return TaxRulesGroupId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\AddTaxRulesGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId;
}
