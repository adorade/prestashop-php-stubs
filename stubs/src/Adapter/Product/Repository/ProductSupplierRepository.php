<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

/**
 * Methods for accessing ProductSupplier data source
 */
class ProductSupplierRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductSupplierValidator $productSupplierValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductSupplierValidator $productSupplierValidator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId $productSupplierId
     *
     * @return \ProductSupplier
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\ProductSupplierNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId $productSupplierId): \ProductSupplier
    {
    }
    /**
     * Returns productSupplierId matching the association if present (null instead)
     * If the association had a productSupplierId defined which doesn't match the found result it means the provided
     * data is not consistent so an exception is raised.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId|null
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\InvalidProductSupplierAssociationException
     */
    public function findIdByAssociation(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association): ?\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    /**
     * Returns the ProductSupplier matching the association, if it's not found an exception is thrown. If you are unsure
     * of the presence of an association use getIdByAssociation instead to check the presence, it returns null when not found.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association
     *
     * @return \ProductSupplier
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\InvalidProductSupplierAssociationException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\ProductSupplierNotAssociatedException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\ProductSupplierNotFoundException
     */
    public function getByAssociation(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association): \ProductSupplier
    {
    }
    /**
     * Returns the ID of the Supplier set as default for this product, data comes from product table
     * but is only returned if the association is present in product_supplier relation table.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId|null
     */
    public function getDefaultSupplierId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): ?\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
    /**
     * Returns the ProductSupplier associated to a product as its default one.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId|null
     */
    public function getDefaultProductSupplierId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierAssociation[]
     */
    public function getAssociationsForSupplier(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId[]
     */
    public function getAssociatedSupplierIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param \ProductSupplier $productSupplier
     * @param int $errorCode
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\CannotAddProductSupplierException
     */
    public function add(\ProductSupplier $productSupplier, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    /**
     * @param \ProductSupplier $productSupplier
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\CannotUpdateProductSupplierException
     */
    public function update(\ProductSupplier $productSupplier): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId $productSupplierId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\CannotDeleteProductSupplierException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId $productSupplierId): void
    {
    }
    /**
     * @param array $productSupplierIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\CannotBulkDeleteProductSupplierException
     */
    public function bulkDelete(array $productSupplierIds): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface|null $combinationId
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
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param array $expectedSuppliersId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId[]
     */
    public function getUselessProductSupplierIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $expectedSuppliersId): array
    {
    }
}
