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
     * @return CategoryId
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
