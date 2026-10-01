<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\QueryResult;

/**
 * Holds packed product data
 */
class PackedProduct
{
    /**
     * @param int $productId
     * @param int $quantity
     * @param int $combinationId
     */
    public function __construct(int $productId, int $quantity, int $combinationId)
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return int
     */
    public function getCombinationId(): int
    {
    }
}
