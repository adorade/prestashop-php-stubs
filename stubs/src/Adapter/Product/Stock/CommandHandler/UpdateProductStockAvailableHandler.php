<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\CommandHandler;

/**
 * Updates product stock using legacy object model
 */
class UpdateProductStockAvailableHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Stock\CommandHandler\UpdateProductStockHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\Command\UpdateProductStockAvailableCommand $command): void
    {
    }
}
