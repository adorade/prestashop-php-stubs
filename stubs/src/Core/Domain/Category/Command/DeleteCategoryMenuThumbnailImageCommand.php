<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Deletes given menu thumbnail for category.
 */
class DeleteCategoryMenuThumbnailImageCommand
{
    /**
     * @param int $categoryId
     * @param int $menuThumbnailId
     */
    public function __construct($categoryId, $menuThumbnailId)
    {
    }
    /**
     * @return CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return MenuThumbnailId
     */
    public function getMenuThumbnailId()
    {
    }
}
