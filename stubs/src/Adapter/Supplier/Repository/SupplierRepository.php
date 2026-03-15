<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\Repository;

/**
 * Methods to access Supplier data source
 */
class SupplierRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param SupplierId $supplierId
     *
     * @throws SupplierNotFoundException
     */
    public function assertSupplierExists(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId): void
    {
    }
    /**
     * @param SupplierId $supplierId
     *
     * @return Supplier
     *
     * @throws SupplierNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId): \Supplier
    {
    }
}
