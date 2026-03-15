<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\CommandHandler;

/**
 * Handles @see RemoveAllProductsFromPackCommand using legacy object model
 */
final class RemoveAllProductsFromPackHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Pack\CommandHandler\RemoveAllProductsFromPackHandlerInterface
{
    /**
     * @param ProductPackUpdater $productPackUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Pack\Update\ProductPackUpdater $productPackUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command\RemoveAllProductsFromPackCommand $command): void
    {
    }
}
