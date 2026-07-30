<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Query;

/**
 * Get current status (enabled/disabled) for given category.
 */
class GetCategoryIsEnabled
{
    /**
     * @param int $categoryId
     */
    public function __construct($categoryId)
    {
    }
    /**
     * @return CategoryId
     */
    public function getCategoryId()
    {
    }
}
