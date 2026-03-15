<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Validate;

/**
 * Validates ProductSupplier legacy object model
 */
class ProductSupplierValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param ProductRepository $productRepository
     * @param SupplierRepository $supplierProvider
     * @param CurrencyRepository $currencyRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository $supplierProvider, \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository)
    {
    }
    /**
     * @param ProductSupplier $productSupplier
     *
     * @throws CoreException
     */
    public function validate(\ProductSupplier $productSupplier): void
    {
    }
}
