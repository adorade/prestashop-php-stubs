<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler;

/**
 * Deletes catalog prices rules in bulk action using legacy object model
 */
final class BulkDeleteCatalogPriceRuleHandler extends \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\AbstractCatalogPriceRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler\BulkDeleteCatalogPriceRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\BulkDeleteCatalogPriceRuleCommand $command)
    {
    }
}
