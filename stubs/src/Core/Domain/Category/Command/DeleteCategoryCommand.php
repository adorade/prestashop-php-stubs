<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Class DeleteCategoryCommand deletes provided category.
 */
class DeleteCategoryCommand
{
    /**
     * @param int $categoryId
     * @param string $mode
     */
    public function __construct($categoryId, $mode)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryDeleteMode
     */
    public function getDeleteMode()
    {
    }
}
