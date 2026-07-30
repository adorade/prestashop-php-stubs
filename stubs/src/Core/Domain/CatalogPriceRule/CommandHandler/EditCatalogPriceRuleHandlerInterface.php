<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler;

/**
 * Defines contract for CatalogPriceRuleHandler
 */
interface EditCatalogPriceRuleHandlerInterface
{
    /**
     * @param EditCatalogPriceRuleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\EditCatalogPriceRuleCommand $command);
}
