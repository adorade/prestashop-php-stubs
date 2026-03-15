<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query;

/**
 * Class GetCmsPageCategoriesForBreadcrumb is responsible for providing required data for displaying cms page category
 * breadcrumbs.
 */
class GetCmsPageCategoriesForBreadcrumb
{
    /**
     * @param int $currentCategoryId
     *
     * @throws CmsPageCategoryException
     */
    public function __construct($currentCategoryId)
    {
    }
    /**
     * Gets current category id.
     *
     * @return CmsPageCategoryId
     */
    public function getCurrentCategoryId()
    {
    }
}
