<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop;

class ShopProductImages
{
    public function __construct(int $shopId, \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopImageAssociationCollection $productImageCollection)
    {
    }
    /**
     * @return int
     */
    public function getShopId(): int
    {
    }
    public function getProductImages(): \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopImageAssociationCollection
    {
    }
}
