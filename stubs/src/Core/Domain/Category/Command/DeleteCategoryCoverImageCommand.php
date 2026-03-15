<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Deletes cover image for given category.
 */
class DeleteCategoryCoverImageCommand
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
