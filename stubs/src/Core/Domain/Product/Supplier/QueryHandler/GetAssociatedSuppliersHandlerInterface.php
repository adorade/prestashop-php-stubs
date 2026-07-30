<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryHandler;

/**
 * Defines contract to handle @see GetAssociatedSuppliers
 */
interface GetAssociatedSuppliersHandlerInterface
{
    /**
     * @param GetAssociatedSuppliers $query
     *
     * @return AssociatedSuppliers
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query\GetAssociatedSuppliers $query): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\AssociatedSuppliers;
}
