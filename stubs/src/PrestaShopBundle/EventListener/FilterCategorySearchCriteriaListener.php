<?php

namespace PrestaShopBundle\EventListener;

/**
 * Class FilterCategorySearchCriteriaListener updates category search criteria filters with resolved category parent id.
 */
class FilterCategorySearchCriteriaListener
{
    /**
     * @param DecoratedSearchCriteriaFactory $categorySearchCriteriaFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Search\Factory\DecoratedSearchCriteriaFactory $categorySearchCriteriaFactory)
    {
    }
    /**
     * @param FilterSearchCriteriaEvent $event
     */
    public function onFilterSearchCriteria(\PrestaShopBundle\Event\FilterSearchCriteriaEvent $event)
    {
    }
}
