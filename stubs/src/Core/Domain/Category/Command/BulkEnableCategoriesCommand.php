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
     * @throws CategoryConstraintException
     * @throws CategoryException
     */
    public function __construct(array $categoryIds)
    {
    }
}
