<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject;

/**
 * This value object identifies a specific association between a supplier and a product. It is based on three criteria
 * productId, combinationId and supplierId. For product without combinations combinationId is always 0.
 *
 * The productSupplierId is optional, it may be present when the association already exists in DB or absent if we
 * haven't created it yet but we can still use this VO based on the criteria.
 */
class ProductSupplierAssociation implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface
{
    /**
     * @param int $productId
     * @param int $combinationId
     * @param int $supplierId
     * @param int|null $productSupplierId
     */
    public function __construct(int $productId, int $combinationId, int $supplierId, ?int $productSupplierId = null)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return CombinationIdInterface
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface
    {
    }
    /**
     * @return SupplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
    /**
     * @return ProductSupplierId|null
     */
    public function getProductSupplierId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId
    {
    }
    public function __toString()
    {
    }
}
