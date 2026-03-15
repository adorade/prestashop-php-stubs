<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer;

class ManufacturerProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Manufacturer $manufacturer)
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
