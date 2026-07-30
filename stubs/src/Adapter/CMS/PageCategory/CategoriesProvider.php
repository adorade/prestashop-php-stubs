<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory;

/**
 * Class CategoriesProvider is responsible for providing cms page categories data.
 */
class CategoriesProvider
{
    /**
     * @param int $contextLanguageId
     * @param array $contextShopIds
     */
    public function __construct($contextLanguageId, array $contextShopIds)
    {
    }
    /**
     * Gets all nested cms page categories.
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function getAllNestedCategories()
    {
    }
}
