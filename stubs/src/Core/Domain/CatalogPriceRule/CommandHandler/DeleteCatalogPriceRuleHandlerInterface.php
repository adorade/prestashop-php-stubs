<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler;

/**
 * Defines contract for delete catalog price rule handler
 */
interface DeleteCatalogPriceRuleHandlerInterface
{
    /**
     * @param DeleteCatalogPriceRuleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\DeleteCatalogPriceRuleCommand $command);
}
