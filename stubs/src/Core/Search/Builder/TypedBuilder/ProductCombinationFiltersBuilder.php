<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder;

/**
 * This builder is specific to ProductCombinationFilters, which have a mandatory filter criteria product_id
 * that must be applied. This builder is able to fetch it from Request attribute so that it can be used in
 * the ProductCombinationFilters constructor as expected.
 */
class ProductCombinationFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder implements \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\TypedFiltersBuilderInterface
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
    /**
     * {@inheritDoc}
     */
    public function supports(string $filterClassName): bool
    {
    }
}
