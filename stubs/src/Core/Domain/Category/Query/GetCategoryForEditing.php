<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Query;

/**
 * Class GetCategoryForEditing retrieves category data for editing.
 */
class GetCategoryForEditing
{
    /**
     * @param int $categoryId
     */
    public function __construct($categoryId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
}
