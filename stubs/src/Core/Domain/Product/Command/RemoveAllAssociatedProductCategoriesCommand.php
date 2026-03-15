<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Removes all product-category associations
 */
class RemoveAllAssociatedProductCategoriesCommand
{
    /**
     * @param int $productId
     */
    public function __construct(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
