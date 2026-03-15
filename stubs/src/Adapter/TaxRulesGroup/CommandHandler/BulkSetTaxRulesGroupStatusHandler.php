<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles toggling of multiple tax rules groups statuses
 */
final class BulkSetTaxRulesGroupStatusHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler\BulkToggleTaxRulesGroupStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotBulkUpdateTaxRulesGroupException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\BulkSetTaxRulesGroupStatusCommand $command): void
    {
    }
}
