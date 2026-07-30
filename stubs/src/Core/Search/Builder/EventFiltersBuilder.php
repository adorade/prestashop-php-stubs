<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * This builder is used to allow modification of the built filters via
 * a symfony event prestashop.search_criteria.filter (used to change the
 * generic building process in some edge cases)
 *
 * @see FilterCategorySearchCriteriaListener
 */
final class EventFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder
{
    /**
     * @param EventDispatcherInterface $dispatcher
     */
    public function __construct(\Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
