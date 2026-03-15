<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * This builder instantiate a filters object of the specified type using
 * its default values for creation.
 */
final class ClassFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder
{
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
    }
    /**
     * Build the filters with the class defined by filtersClass
     *
     * @param Filters|null $filters
     *
     * @return Filters
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
