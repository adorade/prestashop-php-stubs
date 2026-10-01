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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    public function __construct($supplierId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
     */
    public function getSupplierId()
    {
    }
}
