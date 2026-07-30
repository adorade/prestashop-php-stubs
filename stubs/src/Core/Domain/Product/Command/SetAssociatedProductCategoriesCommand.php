<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Sets new product-category associations
 */
class SetAssociatedProductCategoriesCommand
{
    /**
     * @param int $productId
     * @param int $defaultCategoryId
     * @param int[] $categoryIds
     */
    public function __construct(int $productId, int $defaultCategoryId, array $categoryIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return CategoryId
     */
    public function getDefaultCategoryId(): \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return CategoryId[]
     */
    public function getCategoryIds(): array
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
