<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Query;

/**
 * Get FeatureValue associated to a Product
 */
class GetProductFeatureValues
{
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
