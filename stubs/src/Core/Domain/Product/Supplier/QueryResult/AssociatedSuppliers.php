<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult;

/**
 * Transfers product associated suppliers minimal data, only the list of suppliers IDs and the default one.
 */
class AssociatedSuppliers
{
    /**
     * @param int $defaultSupplierId
     * @param int[] $supplierIds
     */
    public function __construct(int $defaultSupplierId, array $supplierIds)
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
}
