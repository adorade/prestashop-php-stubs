<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Methods to update product & category relations
 */
class ProductCategoryUpdater
{
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * Warning: $categoryIds will replace current categories, erasing previous data
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function removeAllCategories(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     * @param CategoryId[] $newCategoryIds
     * @param CategoryId $defaultCategoryId
     * @param shopConstraint $shopConstraint
     *
     * Warning: $categoryIds will replace current categories, erasing previous data, it will only impact the categories
     * matching the shop constraint though
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function updateCategories(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $newCategoryIds, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $defaultCategoryId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
