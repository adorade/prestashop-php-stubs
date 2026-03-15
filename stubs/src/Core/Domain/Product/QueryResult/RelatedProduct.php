<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Transfers related product data
 */
class RelatedProduct
{
    /**
     * @param int $productId
     * @param string $name
     * @param string $reference
     * @param string $imageUrl
     */
    public function __construct(int $productId, string $name, string $reference, string $imageUrl)
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getImageUrl(): string
    {
    }
}
