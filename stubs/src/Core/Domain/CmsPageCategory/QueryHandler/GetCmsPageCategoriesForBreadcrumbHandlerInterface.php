<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler;

/**
 * Interface GetCmsPageCategoriesForBreadcrumbHandlerInterface defines contract for GetCmsPageCategoriesForBreadcrumbHandlerInterface.
 */
interface GetCmsPageCategoriesForBreadcrumbHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoriesForBreadcrumb $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryResult\Breadcrumb
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoriesForBreadcrumb $query);
}
