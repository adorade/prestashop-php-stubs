<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Class BulkDeleteSupplierCommand is responsible for deleting multiple suppliers.
 */
class BulkDeleteSupplierCommand extends \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AbstractBulkSupplierCommand
{
    /**
     * @param int[] $supplierIds
     *
     * @throws SupplierException
     * @throws SupplierConstraintException
     */
    public function __construct(array $supplierIds)
    {
    }
    /**
     * @return SupplierId[]
     */
    public function getSupplierIds()
    {
    }
}
