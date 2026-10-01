<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Supplier\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetAssociatedSuppliersHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryHandler\GetAssociatedSuppliersHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Query\GetAssociatedSuppliers $query): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\AssociatedSuppliers
    {
    }
}
