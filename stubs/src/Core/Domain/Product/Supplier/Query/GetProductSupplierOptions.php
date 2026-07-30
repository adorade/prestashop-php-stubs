<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query;

/**
 * Provides product supplier options
 */
class GetProductSupplierOptions
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
