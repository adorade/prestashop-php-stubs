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
