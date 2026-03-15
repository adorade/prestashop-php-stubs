<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\CommandHandler;

/**
 * Handles @see SetPackProductsCommand using legacy object model
 */
final class SetPackProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Pack\CommandHandler\SetPackProductsHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command\SetPackProductsCommand $command): void
    {
    }
}
