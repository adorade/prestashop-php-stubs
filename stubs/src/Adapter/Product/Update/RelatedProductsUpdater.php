<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Provides methods to update related products (a.k.a accessories)
 */
class RelatedProductsUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId[] $relatedProductIds
     */
    public function setRelatedProducts(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $relatedProductIds): void
    {
    }
}
