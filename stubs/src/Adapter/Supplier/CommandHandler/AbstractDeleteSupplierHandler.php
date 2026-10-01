<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class AbstractDeleteSupplierHandler defines common actions required for
 * both BulkDeleteSupplierHandler and DeleteSupplierHandler.
 */
abstract class AbstractDeleteSupplierHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Supplier\SupplierOrderValidator $supplierOrderValidator
     * @param \PrestaShop\PrestaShop\Adapter\Supplier\SupplierAddressProvider $supplierAddressProvider
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater
     * @param string $dbPrefix
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Supplier\SupplierOrderValidator $supplierOrderValidator, \PrestaShop\PrestaShop\Adapter\Supplier\SupplierAddressProvider $supplierAddressProvider, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater, string $dbPrefix)
    {
    }
    /**
     * Removes supplier and all related content with it such as image, supplier and product relation
     * and supplier address.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    protected function removeSupplier(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
}
