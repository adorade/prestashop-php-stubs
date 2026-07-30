<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Class DeleteCategoryCommand deletes provided category.
 */
class DeleteCategoryCommand
{
    /**
     * @param int $categoryId
     * @param string $mode
     */
    public function __construct($categoryId, $mode)
    {
    }
    /**
     * @return CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return CategoryDeleteMode
     */
    public function getDeleteMode()
    {
    }
}
