<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler;

/**
 * Interface for service that handles query to get supplier for viewing
 */
interface GetSupplierForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\QueryResult\ViewableSupplier
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForViewing $query);
}
