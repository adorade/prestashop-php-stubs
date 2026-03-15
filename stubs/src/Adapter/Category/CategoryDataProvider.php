<?php

namespace PrestaShop\PrestaShop\Adapter\Category;

/**
 * This class will provide data from DB / ORM about Category.
 */
class CategoryDataProvider
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context)
    {
    }
    /**
     * Get a category.
     *
     * @param int|null $idCategory
     * @param int|null $idLang
     * @param int|null $idShop
     *
     * @throws LogicException If the category id is not set
     *
     * @return Category
     */
    public function getCategory($idCategory = null, $idLang = null, $idShop = null)
    {
    }
    /**
     * Get all nested categories.
     *
     * @param int|null $root_category
     * @param bool|int $id_lang
     * @param bool $active
     * @param array|null $groups
     * @param bool $use_shop_restriction
     * @param string $sql_filter
     * @param string $sql_sort
     * @param string $sql_limit
     *
     * @return array categories
     */
    public function getNestedCategories($root_category = null, $id_lang = false, $active = true, $groups = null, $use_shop_restriction = true, $sql_filter = '', $sql_sort = '', $sql_limit = '')
    {
    }
    /**
     * Return available categories Names - excluding Root category.
     *
     * @param int|null $root_category
     * @param bool|int $id_lang
     * @param bool $active return only active categories
     * @param array|null $groups
     * @param bool $use_shop_restriction
     * @param string $sql_filter
     * @param string $sql_sort
     * @param string $sql_limit
     *
     * @return array Categories
     */
    public function getAllCategoriesName($root_category = null, $id_lang = false, $active = true, $groups = null, $use_shop_restriction = true, $sql_filter = '', $sql_sort = '', $sql_limit = '')
    {
    }
    /**
     * Return a simple array id/name of categories for a specified product.
     *
     * @param \Product $product
     *
     * @return array Categories
     */
    public function getCategoriesByProduct(\ObjectModel $product)
    {
    }
    /**
     * Return a simple array id/name of categories.
     *
     * @return array Categories
     */
    public function getCategoriesWithBreadCrumb()
    {
    }
    /**
     * Construct the breadcrumb using the already constructed list of all categories.
     *
     * @param int $categoryId
     * @param string $delimiter
     *
     * @return string
     */
    public function getBreadCrumb($categoryId, $delimiter = ' > ')
    {
    }
    /**
     * @param int $categoryId
     *
     * @return array
     */
    public function getParentNamesFromList($categoryId)
    {
    }
    /**
     * Get Categories formatted like ajax_product_file.php using Category::getNestedCategories.
     *
     * @param string $query
     * @param int $limit
     * @param bool $nameAsBreadCrumb
     *
     * @return array
     */
    public function getAjaxCategories($query, $limit, $nameAsBreadCrumb = false)
    {
    }
    /**
     * @param int|null $idLang
     * @param Shop|null $shop
     *
     * @return Category
     */
    public function getRootCategory($idLang = null, \Shop $shop = null)
    {
    }
}
