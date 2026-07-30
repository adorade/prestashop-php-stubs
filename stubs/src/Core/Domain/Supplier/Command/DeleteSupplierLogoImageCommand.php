<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Deletes supplier logo image
 */
class DeleteSupplierLogoImageCommand
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
     * @return SupplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
}
