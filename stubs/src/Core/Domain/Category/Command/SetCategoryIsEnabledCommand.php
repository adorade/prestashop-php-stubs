<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Class ToggleCategoryStatusCommand toggles given category status.
 */
class SetCategoryIsEnabledCommand
{
    /**
     * @param int $categoryId
     * @param bool $isEnabled
     */
    public function __construct($categoryId, $isEnabled)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
}
