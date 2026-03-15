<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject;

interface SupplierAssociationInterface extends \Stringable
{
    /**
     * @return ProductId|null
     */
    public function getProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;
    /**
     * @return CombinationIdInterface
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface;
    /**
     * @return SupplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId;
    /**
     * @return ProductSupplierId|null
     */
    public function getProductSupplierId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\ProductSupplierId;
}
