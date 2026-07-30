<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Query;

/**
 * Get current status (enabled/disabled) for a given product
 */
class GetProductIsEnabled
{
    /**
     * GetProductIsEnabled constructor.
     *
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
