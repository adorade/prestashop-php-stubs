<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command;

/**
 * Updates product suppliers
 */
class UpdateProductSuppliersCommand
{
    /**
     * @param int $productId
     * @param array<int, array<string, mixed>> $productSuppliers
     *
     * @see UpdateProductSuppliersCommand::setProductSuppliers() for $productSuppliers structure
     */
    public function __construct(int $productId, array $productSuppliers)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ProductSupplierUpdate[]
     */
    public function getProductSuppliers(): array
    {
    }
}
