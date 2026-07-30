<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Class DeleteSupplierCommand is responsible for deleting the supplier.
 */
class DeleteSupplierCommand
{
    /**
     * @param int $supplierId
     *
     * @throws SupplierException
     */
    public function __construct($supplierId)
    {
    }
    /**
     * @return SupplierId
     */
    public function getSupplierId()
    {
    }
}
