<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * Basic abstract class for FiltersBuilder classes, able to store the filters_id
 * from the config.
 */
abstract class AbstractFiltersBuilder implements \PrestaShop\PrestaShop\Core\Search\Builder\FiltersBuilderInterface
{
    /** @var string */
    protected $filterId;
    /**
     * @var ShopConstraint|null
     */
    protected $shopConstraint;
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
    }
    /**
     * {@inheritdoc}
     */
    abstract public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null);
    /**
     * @param Filters|null $filters
     *
     * @return string
     */
    protected function getFilterId(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
