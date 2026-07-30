<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Class ToggleSupplierStatusCommand is responsible for toggling supplier status.
 */
class ToggleSupplierStatusCommand
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
