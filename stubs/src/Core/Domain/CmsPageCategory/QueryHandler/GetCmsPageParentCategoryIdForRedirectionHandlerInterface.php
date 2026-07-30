<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler;

/**
 * Interface GetCmsPageParentCategoryIdForRedirectionHandlerInterface defines contract
 * for GetCmsPageParentCategoryIdForRedirectionHandler.
 */
interface GetCmsPageParentCategoryIdForRedirectionHandlerInterface
{
    /**
     * @param GetCmsPageParentCategoryIdForRedirection $query
     *
     * @return CmsPageCategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageParentCategoryIdForRedirection $query);
}
