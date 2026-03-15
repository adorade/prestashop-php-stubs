<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Class BulkDeleteCategoriesCommand.
 */
class BulkDeleteCategoriesCommand
{
    /**
     * @param int[] $categoryIds
     * @param string $deleteMode
     *
     * @throws CategoryConstraintException
     * @throws CategoryException
     */
    public function __construct(array $categoryIds, $deleteMode)
    {
    }
    /**
     * @return CategoryId[]
     */
    public function getCategoryIds()
    {
    }
    /**
     * @return CategoryDeleteMode
     */
    public function getDeleteMode()
    {
    }
}
