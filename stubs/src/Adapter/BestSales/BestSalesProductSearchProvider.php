<?php

namespace PrestaShop\PrestaShop\Adapter\BestSales;

class BestSalesProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context
     * @param \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query
     *
     * @return \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult
     */
    public function runQuery(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query)
    {
    }
}
