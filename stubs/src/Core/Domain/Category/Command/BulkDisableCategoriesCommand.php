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
     * @throws CategoryConstraintException
     */
    public function __construct(array $categoryIds)
    {
    }
}
