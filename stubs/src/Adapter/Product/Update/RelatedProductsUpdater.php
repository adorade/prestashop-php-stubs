<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Provides methods to update related products (a.k.a accessories)
 */
class RelatedProductsUpdater
{
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param ProductId[] $relatedProductIds
     */
    public function setRelatedProducts(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $relatedProductIds): void
    {
    }
}
