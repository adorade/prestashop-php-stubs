<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\Repository;

/**
 * Methods to access Supplier data source
 */
class SupplierRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierNotFoundException
     */
    public function assertSupplierExists(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     *
     * @return \Supplier
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId): \Supplier
    {
    }
}
