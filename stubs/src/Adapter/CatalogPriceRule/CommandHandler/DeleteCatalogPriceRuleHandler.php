<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler;

/**
 * Handles deletion of catalog price rule using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteCatalogPriceRuleHandler extends \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\AbstractCatalogPriceRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler\DeleteCatalogPriceRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\DeleteCatalogPriceRuleCommand $command)
    {
    }
}
