<?php

namespace PrestaShop\PrestaShop\Adapter\BestSales;

class BestSalesProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param ProductSearchContext $context
     * @param ProductSearchQuery $query
     *
     * @return ProductSearchResult
     */
    public function runQuery(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query)
    {
    }
}
