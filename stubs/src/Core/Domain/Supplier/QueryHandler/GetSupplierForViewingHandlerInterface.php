<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler;

/**
 * Interface for service that handles query to get supplier for viewing
 */
interface GetSupplierForViewingHandlerInterface
{
    /**
     * @param GetSupplierForViewing $query
     *
     * @return ViewableSupplier
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForViewing $query);
}
