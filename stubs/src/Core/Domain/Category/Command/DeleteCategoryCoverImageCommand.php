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
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
}
