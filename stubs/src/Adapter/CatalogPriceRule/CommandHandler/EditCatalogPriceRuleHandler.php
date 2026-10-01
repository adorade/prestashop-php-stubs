<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler;

/**
 * Handles command which edits catalog price rule handler using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditCatalogPriceRuleHandler extends \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\AbstractCatalogPriceRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler\EditCatalogPriceRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\EditCatalogPriceRuleCommand $command)
    {
    }
}
