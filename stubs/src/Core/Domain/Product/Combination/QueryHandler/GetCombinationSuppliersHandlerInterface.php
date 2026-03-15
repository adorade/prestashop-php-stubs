<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

/**
 * Defines contract to handle @see GetCombinationSuppliers query
 */
interface GetCombinationSuppliersHandlerInterface
{
    /**
     * @param GetCombinationSuppliers $query
     *
     * @return ProductSupplierForEditing[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationSuppliers $query): array;
}
