<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * Holds reusable methods for ProductSupplier related query/command handlers
 */
abstract class AbstractProductSupplierHandler
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository
     */
    protected $productSupplierRepository;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId|null $combinationId
     *
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult\ProductSupplierForEditing>
     */
    protected function getProductSuppliersInfo(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId = null): array
    {
    }
    /**
     * Loads ProductSupplier object model with data from DTO.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ProductSupplierUpdate $productSupplierUpdate
     *
     * @return \ProductSupplier
     */
    protected function loadEntityFromDTO(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ProductSupplierUpdate $productSupplierUpdate): \ProductSupplier
    {
    }
}
