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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
     */
    public function __construct(array $categoryIds, $deleteMode)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId[]
     */
    public function getCategoryIds()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryDeleteMode
     */
    public function getDeleteMode()
    {
    }
}
