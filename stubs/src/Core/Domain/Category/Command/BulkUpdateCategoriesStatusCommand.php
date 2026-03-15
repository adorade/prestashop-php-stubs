<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Updates provided categories to new status
 */
class BulkUpdateCategoriesStatusCommand
{
    /**
     * @param int[] $categoryIds
     * @param bool $newStatus
     *
     * @throws CategoryConstraintException
     * @throws CategoryException
     */
    public function __construct(array $categoryIds, $newStatus)
    {
    }
    /**
     * @return CategoryId[]
     */
    public function getCategoryIds()
    {
    }
    /**
     * @return bool
     */
    public function getNewStatus()
    {
    }
}
