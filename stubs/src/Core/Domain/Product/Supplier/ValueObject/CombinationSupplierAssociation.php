<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject;

/**
 * This value object identifies a specific association between a supplier and a combination. Usually the association is
 * based on three criteria (productId, combinationId, supplierId) @see ProductSupplierAssociation. But in a context of
 * search only the combinationId is mandatory. So this VO can be used to search a supplier association with a combination.
 */
class CombinationSupplierAssociation implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface
{
    /**
     * @param int $combinationId
     * @param int $supplierId
     * @param int|null $productSupplierId
     */
    public function __construct(int $combinationId, int $supplierId, ?int $productSupplierId = null)
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
    /**
     * No need for product ID to identify a supplier association for a designated combination, we can match it by
     * combination ID only.
     *
     * @return ProductId|null
     */
    public function getProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    public function __toString()
    {
    }
}
