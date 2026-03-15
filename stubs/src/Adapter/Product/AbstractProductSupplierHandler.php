<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * Holds reusable methods for ProductSupplier related query/command handlers
 */
abstract class AbstractProductSupplierHandler
{
    /**
     * @var ProductSupplierRepository
     */
    protected $productSupplierRepository;
    /**
     * @param ProductSupplierRepository $productSupplierRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param CombinationId|null $combinationId
     *
     * @return array<int, ProductSupplierForEditing>
     */
    protected function getProductSuppliersInfo(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId = null): array
    {
    }
    /**
     * Loads ProductSupplier object model with data from DTO.
     *
     * @param ProductSupplierUpdate $productSupplierUpdate
     *
     * @return ProductSupplier
     */
    protected function loadEntityFromDTO(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ProductSupplierUpdate $productSupplierUpdate): \ProductSupplier
    {
    }
}
