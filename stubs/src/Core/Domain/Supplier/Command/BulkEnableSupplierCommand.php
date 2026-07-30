<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Class BulkEnableSupplierCommand is responsible for enabling multiple suppliers.
 */
class BulkEnableSupplierCommand extends \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AbstractBulkSupplierCommand
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
