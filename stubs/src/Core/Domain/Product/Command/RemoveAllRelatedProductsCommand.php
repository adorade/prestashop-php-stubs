<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Removes all related products from given product
 */
class RemoveAllRelatedProductsCommand
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
