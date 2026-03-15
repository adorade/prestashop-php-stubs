<?php

namespace PrestaShopBundle\Service\DataProvider\Admin;

/**
 * Provide the categories used to order modules and themes on https://addons.prestashop.com.
 */
class CategoriesProvider
{
    public const CATEGORY_OTHER = 'other';
    public const CATEGORY_OTHER_NAME = 'Other';
    public const CATEGORY_THEME = 'theme_modules';
    public const CATEGORY_THEME_NAME = 'Theme modules';
    public function __construct(array $addonsCategories, array $modulesTheme)
    {
    }
    public function getCategories(): array
    {
    }
    /**
     * Return the list of categories with the associated modules.
     *
     * @param array|ModuleCollection $modules
     *
     * @return array the list of categories
     */
    public function getCategoriesMenu($modules): array
    {
    }
    /**
     * Considering a category name, return his category parent name.
     *
     * @param string $categoryName
     *
     * @return string
     */
    public function getParentCategory(string $categoryName): string
    {
    }
}
