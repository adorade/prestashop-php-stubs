<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult;

/**
 * Transfers product suppliers data
 */
class ProductSupplierOptions
{
    /**
     * @param int $defaultSupplierId
     * @param ProductSupplierForEditing[] $productSuppliers
     */
    public function __construct(int $defaultSupplierId, array $supplierIds, array $productSuppliers)
    {
    }
    /**
     * @return int
     */
    public function getDefaultSupplierId(): int
    {
    }
    /**
     * @return int[]
     */
    public function getSupplierIds(): array
    {
    }
    /**
     * @return ProductSupplierForEditing[]
     */
    public function getProductSuppliers(): array
    {
    }
}
