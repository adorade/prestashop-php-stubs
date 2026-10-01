<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer;

class ManufacturerProductSearchProvider implements \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Manufacturer $manufacturer)
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
