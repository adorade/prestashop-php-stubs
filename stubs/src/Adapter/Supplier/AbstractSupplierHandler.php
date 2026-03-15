<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier;

/**
 * Provides reusable methods for supplier command/query handlers
 */
abstract class AbstractSupplierHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * Gets legacy Supplier
     *
     * @param SupplierId $supplierId
     *
     * @return Supplier
     *
     * @throws SupplierException
     */
    protected function getSupplier(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
    /**
     * @param SupplierId $supplierId
     *
     * @return Address
     *
     * @throws SupplierException
     */
    protected function getSupplierAddress(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
    protected function removeSupplier(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
    /**
     * @param Supplier $supplier
     * @param Address $address
     *
     * @throws PrestaShopException
     * @throws SupplierException
     */
    protected function validateFields(\Supplier $supplier, \Address $address)
    {
    }
}
