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
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     *
     * @return \Supplier
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    protected function getSupplier(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     *
     * @return \Address
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    protected function getSupplierAddress(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
    protected function removeSupplier(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
    /**
     * @param \Supplier $supplier
     * @param \Address $address
     *
     * @throws \PrestaShopException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    protected function validateFields(\Supplier $supplier, \Address $address)
    {
    }
}
