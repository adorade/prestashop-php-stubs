<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Query;

/**
 * Get list of Images associated to a Product detailed for every shop
 */
class GetShopProductImages
{
    /**
     * @param int $productId
     */
    public function __construct(int $productId)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
