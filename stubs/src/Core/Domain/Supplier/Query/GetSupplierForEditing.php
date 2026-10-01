<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Query;

/**
 * Gets supplier for editing in Back Office
 */
class GetSupplierForEditing
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
}
