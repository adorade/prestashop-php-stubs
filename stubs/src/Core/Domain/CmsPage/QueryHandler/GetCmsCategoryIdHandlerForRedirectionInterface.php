<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler;

/**
 * Defines contract for GetCmsCategoryIdHandlerForRedirection.
 */
interface GetCmsCategoryIdHandlerForRedirectionInterface
{
    /**
     * @param GetCmsCategoryIdForRedirection $query
     *
     * @return CmsPageCategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsCategoryIdForRedirection $query);
}
