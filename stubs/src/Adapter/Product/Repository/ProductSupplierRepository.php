<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

/**
 * Methods for accessing ProductSupplier data source
 */
class ProductSupplierRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param ProductSupplierValidator $productSupplierValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductSupplierValidator $productSupplierValidator)
    {
    }
    /**
     * @param ProductSupplierId $productSupplierId
     *
     * @return ProductSupplier
     *
     * @throws ProductSupplierNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId $productSupplierId): \ProductSupplier
    {
    }
    /**
     * Returns productSupplierId matching the association if present (null instead)
     * If the association had a productSupplierId defined which doesn't match the found result it means the provided
     * data is not consistent so an exception is raised.
     *
     * @param SupplierAssociationInterface $association
     *
     * @return ProductSupplierId|null
     *
     * @throws InvalidProductSupplierAssociationException
     */
    public function findIdByAssociation(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association): ?\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    /**
     * Returns the ProductSupplier matching the association, if it's not found an exception is thrown. If you are unsure
     * of the presence of an association use getIdByAssociation instead to check the presence, it returns null when not found.
     *
     * @param SupplierAssociationInterface $association
     *
     * @return ProductSupplier
     *
     * @throws InvalidProductSupplierAssociationException
     * @throws ProductSupplierNotAssociatedException
     * @throws ProductSupplierNotFoundException
     */
    public function getByAssociation(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association): \ProductSupplier
    {
    }
    /**
     * Returns the ID of the Supplier set as default for this product, data comes from product table
     * but is only returned if the association is present in product_supplier relation table.
     *
     * @param ProductId $productId
     *
     * @return SupplierId|null
     */
    public function getDefaultSupplierId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): ?\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
    /**
     * Returns the ProductSupplier associated to a product as its default one.
     *
     * @param ProductId $productId
     *
     * @return ProductSupplierId|null
     */
    public function getDefaultProductSupplierId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    /**
     * @param ProductId $productId
     * @param SupplierId $supplierId
     *
     * @return ProductSupplierAssociation[]
     */
    public function getAssociationsForSupplier(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId): array
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return SupplierId[]
     */
    public function getAssociatedSupplierIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param ProductSupplier $productSupplier
     * @param int $errorCode
     *
     * @return ProductSupplierId
     *
     * @throws CannotAddProductSupplierException
     */
    public function add(\ProductSupplier $productSupplier, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    /**
     * @param ProductSupplier $productSupplier
     *
     * @throws CannotUpdateProductSupplierException
     */
    public function update(\ProductSupplier $productSupplier): void
    {
    }
    /**
     * @param ProductSupplierId $productSupplierId
     *
     * @throws CannotDeleteProductSupplierException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId $productSupplierId): void
    {
    }
    /**
     * @param array $productSupplierIds
     *
     * @throws CannotBulkDeleteProductSupplierException
     */
    public function bulkDelete(array $productSupplierIds): void
    {
    }
    /**
     * @param ProductId $productId
     * @param CombinationIdInterface|null $combinationId
     *
     * @return array
     */
    public function getProductSuppliersInfo(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface $combinationId = null): array
    {
    }
    /**
     * Returns true if some suppliers have identical names, in which case we integrate the ID into the name to avoid confusion.
     *
     * @return bool
     */
    public function hasDuplicateSuppliersName(): bool
    {
    }
    /**
     * Returns the list of ProductSupplierId which don't match the expected suppliers.
     *
     * @param ProductId $productId
     * @param array $expectedSuppliersId
     *
     * @return ProductSupplierId[]
     */
    public function getUselessProductSupplierIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $expectedSuppliersId): array
    {
    }
}
