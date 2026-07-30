<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * This builder is able to get the employee saved filter:
 *  - thanks to filterId if one has been specified (either in the config or by the Filters sub class)
 *  - thanks to controller/action matching from the request
 */
final class RepositoryFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractRepositoryFiltersBuilder
{
    /**
     * {@inheritdoc}
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
