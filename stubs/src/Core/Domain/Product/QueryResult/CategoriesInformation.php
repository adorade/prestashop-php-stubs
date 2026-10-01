<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Contains information about product categories
 */
class CategoriesInformation
{
    /**
     * @param CategoryInformation[] $categoriesInformation
     * @param int $defaultCategoryId
     */
    public function __construct(array $categoriesInformation, int $defaultCategoryId)
    {
    }
    /**
     * @return CategoryInformation[]
     */
    public function getCategoriesInformation(): array
    {
    }
    /**
     * @return int
     */
    public function getDefaultCategoryId(): int
    {
    }
}
