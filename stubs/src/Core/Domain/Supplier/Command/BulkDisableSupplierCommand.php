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
