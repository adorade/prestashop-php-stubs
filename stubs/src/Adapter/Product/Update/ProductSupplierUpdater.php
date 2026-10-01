<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Updates product supplier relation
 */
class ProductSupplierUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository $supplierRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository
     * @param int $defaultCurrencyId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository $supplierRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository, int $defaultCurrencyId)
    {
    }
    /**
     * Apply associations between a product and provided suppliers. If association that don't match the provided suppliers
     * exist they are removed. If some associations are missing they are created with empty values. Existing and valid
     * association are not modified. If the product has combination the association is created for all of them.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId[] $supplierIds
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierAssociation[]
     */
    public function associateSuppliers(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $supplierIds): array
    {
    }
    /**
     * When new combinations are created some product supplier are absent, so we get associated suppliers and associate
     * them again, it will only created the missing ones without modifying the existing ones.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierAssociation[]
     */
    public function updateMissingProductSuppliers(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param array<int, \ProductSupplier> $productSuppliers
     *
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierAssociation>
     */
    public function updateSuppliersForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $productSuppliers): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param array<int, \ProductSupplier> $productSuppliers
     *
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierAssociation>
     */
    public function updateSuppliersForCombination(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $productSuppliers): array
    {
    }
    /**
     * Removes all product suppliers associated to specified product without combinations
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     */
    public function removeAllForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
    /**
     * When the default supplier is changed we must update all the synced field for the product and all its combinations.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $defaultSupplierId
     */
    public function updateProductDefaultSupplier(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $defaultSupplierId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId[] $productIds
     */
    public function resetSupplierAssociations(array $productIds): void
    {
    }
}
