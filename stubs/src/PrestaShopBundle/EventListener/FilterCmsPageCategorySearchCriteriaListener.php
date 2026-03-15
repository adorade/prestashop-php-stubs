<?php

namespace PrestaShopBundle\EventListener;

/**
 * Class FilterCmsPageCategorySearchCriteriaListener is responsible for updating CmsCategoryFilters filter with
 * cms page category id.
 */
class FilterCmsPageCategorySearchCriteriaListener
{
    /**
     * @param RequestStack $requestStack
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * @param FilterSearchCriteriaEvent $event
     */
    public function onFilterSearchCriteria(\PrestaShopBundle\Event\FilterSearchCriteriaEvent $event)
    {
    }
}
