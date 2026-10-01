<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product;

/**
 * Transfers product data
 */
class QuantifiedProduct
{
    /**
     * @param int $productId
     * @param int $quantity
     * @param int $combinationId
     */
    public function __construct(int $productId, int $quantity, ?int $combinationId = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId|null
     */
    public function getCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
}
