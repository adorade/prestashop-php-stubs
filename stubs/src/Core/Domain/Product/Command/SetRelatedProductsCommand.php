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
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId[]
     */
    public function getRelatedProductIds(): array
    {
    }
}
