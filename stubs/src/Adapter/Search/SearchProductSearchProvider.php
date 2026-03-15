<?php

namespace PrestaShop\PrestaShop\Adapter\Search;

/**
 * Class responsible of retrieving products in Search page of Front Office.
 *
 * @see SearchController
 */
class SearchProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function runQuery(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query)
    {
    }
}
