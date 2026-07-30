<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler;

/**
 * Interface GetCmsPageCategoriesForBreadcrumbHandlerInterface defines contract for GetCmsPageCategoriesForBreadcrumbHandlerInterface.
 */
interface GetCmsPageCategoriesForBreadcrumbHandlerInterface
{
    /**
     * @param GetCmsPageCategoriesForBreadcrumb $query
     *
     * @return Breadcrumb
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoriesForBreadcrumb $query);
}
