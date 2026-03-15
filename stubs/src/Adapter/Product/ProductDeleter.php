<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

class ProductDeleter
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId[] $shopIds
     */
    public function deleteFromShops(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $shopIds): void
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     */
    public function deleteByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
