<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Enables given categories
 */
class BulkEnableCategoriesCommand extends \PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkUpdateCategoriesStatusCommand
{
    /**
     * @param int[] $categoryIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
     */
    public function __construct(array $categoryIds)
    {
    }
}
