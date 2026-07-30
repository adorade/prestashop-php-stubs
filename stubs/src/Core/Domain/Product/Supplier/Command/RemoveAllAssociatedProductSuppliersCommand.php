<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command;

/**
 * Removes all product suppliers for specified product without combinations
 *
 * @see RemoveAllAssociatedProductSuppliersHandlerInterface
 */
class RemoveAllAssociatedProductSuppliersCommand
{
    /**
     * @param int $productId
     */
    public function __construct(int $productId)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
