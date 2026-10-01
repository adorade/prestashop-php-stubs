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
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\MenuThumbnailId
     */
    public function getMenuThumbnailId()
    {
    }
}
