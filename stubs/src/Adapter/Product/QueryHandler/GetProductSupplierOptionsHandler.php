<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

/**
 * Handles @see GetProductSupplierOptions query
 */
class GetProductSupplierOptionsHandler extends \PrestaShop\PrestaShop\Adapter\Product\AbstractProductSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryHandler\GetProductSupplierOptionsHandlerInterface
{
    /**
     * @param ProductSupplierRepository $productSupplierRepository
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param GetProductSupplierOptions $query
     *
     * @return ProductSupplierOptions
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query\GetProductSupplierOptions $query): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\ProductSupplierOptions
    {
    }
}
