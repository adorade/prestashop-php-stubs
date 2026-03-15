<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryResult;

/**
 * Minimum data to display a preview of a category
 */
class CategoryPreview
{
    /**
     * @param int $categoryId
     * @param string $name
     * @param string $breadcrumb
     * @param string $imageUrl
     */
    public function __construct(int $categoryId, string $name, string $breadcrumb, string $imageUrl)
    {
    }
    /**
     * @return int
     */
    public function getCategoryId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getBreadcrumb(): string
    {
    }
    /**
     * @return string
     */
    public function getImage(): string
    {
    }
}
