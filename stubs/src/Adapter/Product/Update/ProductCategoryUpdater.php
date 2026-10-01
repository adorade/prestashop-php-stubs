<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Methods to update product & category relations
 */
class ProductCategoryUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * Warning: $categoryIds will replace current categories, erasing previous data
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function removeAllCategories(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId[] $newCategoryIds
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $defaultCategoryId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * Warning: $categoryIds will replace current categories, erasing previous data, it will only impact the categories
     * matching the shop constraint though
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function updateCategories(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $newCategoryIds, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $defaultCategoryId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
