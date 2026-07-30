<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class AbstractDeleteSupplierHandler defines common actions required for
 * both BulkDeleteSupplierHandler and DeleteSupplierHandler.
 */
abstract class AbstractDeleteSupplierHandler
{
    /**
     * @param SupplierOrderValidator $supplierOrderValidator
     * @param SupplierAddressProvider $supplierAddressProvider
     * @param ProductSupplierUpdater $productSupplierUpdater
     * @param string $dbPrefix
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Supplier\SupplierOrderValidator $supplierOrderValidator, \PrestaShop\PrestaShop\Adapter\Supplier\SupplierAddressProvider $supplierAddressProvider, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater, string $dbPrefix)
    {
    }
    /**
     * Removes supplier and all related content with it such as image, supplier and product relation
     * and supplier address.
     *
     * @param SupplierId $supplierId
     *
     * @throws SupplierException
     */
    protected function removeSupplier(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId)
    {
    }
}
