<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

/**
 * Will define the query to execute in order to retrieve the list of products.
 */
interface ProductSearchProviderInterface
{
    /**
     * @param ProductSearchContext $context
     * @param ProductSearchQuery $query
     *
     * @return ProductSearchResult
     */
    public function runQuery(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query);
}
