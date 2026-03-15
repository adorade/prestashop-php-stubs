<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler;

class GetCombinationSuppliersHandler extends \PrestaShop\PrestaShop\Adapter\Product\AbstractProductSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationSuppliersHandlerInterface
{
    /**
     * @param ProductSupplierRepository $productSupplierRepository
     * @param CombinationRepository $combinationRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationSuppliers $query): array
    {
    }
}
