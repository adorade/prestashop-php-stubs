<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Sets related products for product
 */
class SetRelatedProductsCommand
{
    /**
     * @param int $productId
     * @param int[] $relatedProductIds
     */
    public function __construct(int $productId, array $relatedProductIds)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ProductId[]
     */
    public function getRelatedProductIds(): array
    {
    }
}
