<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryHandler;

/**
 * Defines contract to handle @see GetProductSupplierOptions
 */
interface GetProductSupplierOptionsHandlerInterface
{
    /**
     * @param GetProductSupplierOptions $query
     *
     * @return ProductSupplierOptions
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query\GetProductSupplierOptions $query): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\ProductSupplierOptions;
}
