<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command;

class SetProductDefaultSupplierCommand
{
    /**
     * @param int $productId
     * @param int $defaultSupplierId
     */
    public function __construct(int $productId, int $defaultSupplierId)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return SupplierId
     */
    public function getDefaultSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
}
