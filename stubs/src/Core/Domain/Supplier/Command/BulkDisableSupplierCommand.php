<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Class BulkDisableSupplierCommand is responsible for disabling multiple suppliers.
 */
class BulkDisableSupplierCommand extends \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AbstractBulkSupplierCommand
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
