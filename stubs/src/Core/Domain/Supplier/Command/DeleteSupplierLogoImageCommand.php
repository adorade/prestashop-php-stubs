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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    public function __construct(int $supplierId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
}
