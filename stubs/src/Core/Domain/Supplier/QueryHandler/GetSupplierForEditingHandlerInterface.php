<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler;

/**
 * Defines contract for GetSupplierForEditingHandler
 */
interface GetSupplierForEditingHandlerInterface
{
    /**
     * @param GetSupplierForEditing $query
     *
     * @return EditableSupplier
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForEditing $query);
}
