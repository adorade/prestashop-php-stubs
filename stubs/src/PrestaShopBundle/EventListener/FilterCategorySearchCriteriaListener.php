<?php

namespace PrestaShopBundle\EventListener;

/**
 * Class FilterCategorySearchCriteriaListener updates category search criteria filters with resolved category parent id.
 */
class FilterCategorySearchCriteriaListener
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\Factory\DecoratedSearchCriteriaFactory $categorySearchCriteriaFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Search\Factory\DecoratedSearchCriteriaFactory $categorySearchCriteriaFactory)
    {
    }
    /**
     * @param \PrestaShopBundle\Event\FilterSearchCriteriaEvent $event
     */
    public function onFilterSearchCriteria(\PrestaShopBundle\Event\FilterSearchCriteriaEvent $event)
    {
    }
}
