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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierConstraintException
     */
    public function __construct(array $supplierIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId[]
     */
    public function getSupplierIds()
    {
    }
}
