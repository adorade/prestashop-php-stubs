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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
     */
    public function __construct(array $categoryIds, $newStatus)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId[]
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
