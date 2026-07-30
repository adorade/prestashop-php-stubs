<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * This builder builds a Filters instance from the request, it is able to fetch the
 * parameters from both GET and POST requests. If the built filter has a filterId
 * it filters the request parameters in a scope (e.g: ?language[limit]=10 instead of
 * ?limit=10)
 * The filterId can be set
 *  - from the builder config
 *  - from the provided filter which class has a default filterId
 *  - from the provided filter which has been manually instantiated with a filterId
 */
final class RequestFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder
{
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
