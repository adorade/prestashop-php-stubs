<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Class ProductShopUpdater
 */
class ProductShopUpdater
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationMultiShopRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationStockUpdater $combinationStockUpdater, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductCategoryUpdater $productCategoryUpdater, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId $sourceShopId
     * @param ShopId $targetShopId
     */
    public function copyToShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $sourceShopId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $targetShopId): void
    {
    }
}
