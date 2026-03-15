<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command;

/**
 * Removes all product feature values
 */
class RemoveAllFeatureValuesFromProductCommand
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
