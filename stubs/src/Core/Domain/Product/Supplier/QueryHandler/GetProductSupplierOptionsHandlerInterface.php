<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryHandler;

/**
 * Defines contract to handle @see GetProductSupplierOptions
 */
interface GetProductSupplierOptionsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query\GetProductSupplierOptions $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\ProductSupplierOptions
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query\GetProductSupplierOptions $query): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\ProductSupplierOptions;
}
