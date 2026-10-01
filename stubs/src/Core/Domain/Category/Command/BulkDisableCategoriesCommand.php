<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Class DisableCategoriesCommand disables provided categories.
 */
class BulkDisableCategoriesCommand extends \PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkUpdateCategoriesStatusCommand
{
    /**
     * @param int[] $categoryIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function __construct(array $categoryIds)
    {
    }
}
