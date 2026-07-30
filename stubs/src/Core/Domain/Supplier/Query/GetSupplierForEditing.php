<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Query;

/**
 * Gets supplier for editing in Back Office
 */
class GetSupplierForEditing
{
    /**
     * @param int $supplierId
     *
     * @throws SupplierException
     */
    public function __construct(int $supplierId)
    {
    }
    /**
     * @return SupplierId $supplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
}
