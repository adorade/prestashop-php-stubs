<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

class ProductTypeUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Pack\Update\ProductPackUpdater $productPackUpdater
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationDeleter $combinationDeleter
     * @param \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update\VirtualProductUpdater $virtualProductUpdater
     * @param \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Pack\Update\ProductPackUpdater $productPackUpdater, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationDeleter $combinationDeleter, \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update\VirtualProductUpdater $virtualProductUpdater, \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater, \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository $productPackRepository)
    {
    }
    public function updateType(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType $productType): void
    {
    }
}
