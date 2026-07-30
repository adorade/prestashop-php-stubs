<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\QueryResult;

/**
 * Transfers product supplier for editing data
 */
class ProductSupplierForEditing
{
    /**
     * @param int $productSupplierId ProductSupplier entity record id
     * @param int $productId the associated product id
     * @param int $supplierId the associated supplier id
     * @param string $reference the reference for this product supplier
     * @param string $priceTaxExcluded
     * @param int $currencyId
     * @param int|null $combinationId
     */
    public function __construct(int $productSupplierId, int $productId, int $supplierId, string $supplierName, string $reference, string $priceTaxExcluded, int $currencyId, ?int $combinationId = null)
    {
    }
    /**
     * @return int
     */
    public function getProductSupplierId(): int
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return int
     */
    public function getSupplierId(): int
    {
    }
    /**
     * @return string
     */
    public function getSupplierName(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getPriceTaxExcluded(): string
    {
    }
    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
    }
    /**
     * @return int|null
     */
    public function getCombinationId(): ?int
    {
    }
}
