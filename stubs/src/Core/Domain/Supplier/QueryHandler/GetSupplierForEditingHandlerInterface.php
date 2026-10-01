<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler;

/**
 * Defines contract for GetSupplierForEditingHandler
 */
interface GetSupplierForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\QueryResult\EditableSupplier
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForEditing $query);
}
