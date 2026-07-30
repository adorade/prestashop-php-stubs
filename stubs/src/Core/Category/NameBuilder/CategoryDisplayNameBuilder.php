<?php

namespace PrestaShop\PrestaShop\Core\Category\NameBuilder;

/**
 * Builds category display name if it needs to differ from original category name.
 */
class CategoryDisplayNameBuilder
{
    /**
     * @param CategoryRepository $categoryRepository
     * @param string $breadcrumbSeparator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, string $breadcrumbSeparator)
    {
    }
    /**
     * If there are multiple categories with identical names, we want to be able to tell them apart,
     * so we build a display name which may include some (or all) parent category names.
     *
     * @see buildBreadcrumb for more details
     *
     * @param string $categoryName
     * @param ShopId $shopId
     * @param LanguageId $languageId
     * @param CategoryId $categoryId
     * @param bool $useCache
     *
     * @return string
     */
    public function build(string $categoryName, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId, bool $useCache = true): string
    {
    }
}
