<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Class AssignProductToCategoryCommand adds a product to a category.
 */
class AssignProductToCategoryCommand
{
    /**
     * @param int $categoryId
     * @param int $productId
     *
     * @throws CategoryConstraintException
     * @throws ProductConstraintException */
    public function __construct($categoryId, $productId)
    {
    }
    /**
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId): \PrestaShop\PrestaShop\Core\Domain\Product\Command\AssignProductToCategoryCommand
    {
    }
    /**
     * @return CategoryId
     */
    public function getCategoryId(): \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
    {
    }
    /**
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): \PrestaShop\PrestaShop\Core\Domain\Product\Command\AssignProductToCategoryCommand
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
