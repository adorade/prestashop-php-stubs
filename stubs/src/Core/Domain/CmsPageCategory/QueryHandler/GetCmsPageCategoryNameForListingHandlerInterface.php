<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler;

/**
 * Defines contract for GetCmsPageCategoryNameForListingHandler.
 */
interface GetCmsPageCategoryNameForListingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoryNameForListing $query
     *
     * @return string
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoryNameForListing $query);
}
