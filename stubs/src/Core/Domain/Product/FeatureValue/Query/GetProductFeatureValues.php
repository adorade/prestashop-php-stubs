<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Query;

/**
 * Get FeatureValue associated to a Product
 */
class GetProductFeatureValues
{
    protected \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId;
    public function __construct(int $productId, int $shopId)
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
}
