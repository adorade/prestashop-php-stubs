<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler;

/**
 * Defines contract for BulkDeleteCatalogPriceRuleHandler
 */
interface BulkDeleteCatalogPriceRuleHandlerInterface
{
    /**
     * @param BulkDeleteCatalogPriceRuleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\BulkDeleteCatalogPriceRuleCommand $command);
}
