<?php

namespace PrestaShop\PrestaShop\Adapter\Category;

/**
 * Responsible of getting products for specific category.
 */
class CategoryProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Category $category)
    {
    }
    /**
     * @param ProductSearchContext $context
     * @param ProductSearchQuery $query
     *
     * @return ProductSearchResult
     *
     * @throws \PrestaShopDatabaseException
     */
    public function runQuery(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query)
    {
    }
}
