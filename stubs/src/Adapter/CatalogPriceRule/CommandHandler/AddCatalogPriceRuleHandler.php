<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler;

/**
 * Handles adding new catalog price rule using legacy object model
 */
final class AddCatalogPriceRuleHandler extends \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\AbstractCatalogPriceRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler\AddCatalogPriceRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\AddCatalogPriceRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
    {
    }
}
