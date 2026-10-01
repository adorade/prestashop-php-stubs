<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class AbstractDeleteCategoryHandler.
 */
abstract class AbstractDeleteCategoryHandler
{
    /**
     * @var int
     */
    protected $homeCategoryId;
    /**
     * @param int $homeCategoryId
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository
     */
    public function __construct(int $homeCategoryId, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @deprecated since 8.1.0 and will be removed in next major version.
     * @see updateProductCategories instead
     *
     * Handle products category after its deletion.
     *
     * @param int $parentCategoryId
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryDeleteMode $mode
     */
    protected function handleProductsUpdate($parentCategoryId, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryDeleteMode $mode)
    {
    }
    /**
     * @param array<int, int[]> $deletedCategoryIdsByParent
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryDeleteMode $mode
     */
    protected function updateProductCategories(array $deletedCategoryIdsByParent, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryDeleteMode $mode): void
    {
    }
}
