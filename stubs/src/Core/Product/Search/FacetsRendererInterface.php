<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

/**
 * Define how we render facets and active filters.
 */
interface FacetsRendererInterface
{
    /**
     * @param ProductSearchContext $context
     * @param ProductSearchResult $result
     *
     * @return string HTML content is expected here
     */
    public function renderFacets(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult $result);
    /**
     * @param ProductSearchContext $context
     * @param ProductSearchResult $result
     *
     * @return string HTML content is expected here
     */
    public function renderActiveFilters(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext $context, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult $result);
}
