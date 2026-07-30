<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\QueryHandler;

/**
 * Class GetCmsPageCategoriesForBreadcrumbHandler is responsible for providing required data for displaying cms page category
 * breadcrumbs.
 */
final class GetCmsPageCategoriesForBreadcrumbHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler\GetCmsPageCategoriesForBreadcrumbHandlerInterface
{
    /**
     * @param int $contextLanguageId
     */
    public function __construct($contextLanguageId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoriesForBreadcrumb $query)
    {
    }
}
