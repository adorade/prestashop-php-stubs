<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Can manage filter parameters from request in Product Catalogue Page.
 * For internal use only.
 */
final class ListParametersUpdater
{
    /**
     * In case of position ordering all the filters should be reset.
     *
     * @param array $filterParameters
     * @param string $orderBy
     * @param bool $hasCategoryFilter
     *
     * @return array $filterParameters
     */
    public function cleanFiltersForPositionOrdering($filterParameters, $orderBy, $hasCategoryFilter)
    {
    }
    /**
     * @param array $queryFilterParameters
     * @param array $persistedFilterParameters
     * @param array $defaultFilterParameters
     *
     * @return array
     *
     * @throws ProductException
     */
    public function buildListParameters(array $queryFilterParameters, array $persistedFilterParameters, array $defaultFilterParameters)
    {
    }
}
