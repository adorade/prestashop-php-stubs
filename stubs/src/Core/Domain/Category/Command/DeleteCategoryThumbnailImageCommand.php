<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Deletes thumbnail image for given category.
 */
class DeleteCategoryThumbnailImageCommand
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
