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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function __construct($currentCategoryId)
    {
    }
    /**
     * Gets current category id.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function getCurrentCategoryId()
    {
    }
}
