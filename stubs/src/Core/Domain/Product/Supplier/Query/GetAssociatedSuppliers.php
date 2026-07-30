<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query;

/**
 * Provides the list of suppliers associated to a product, and its default supllier.
 */
class GetAssociatedSuppliers
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
