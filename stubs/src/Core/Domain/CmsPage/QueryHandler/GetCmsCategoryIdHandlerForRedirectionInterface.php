<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler;

/**
 * Defines contract for GetCmsCategoryIdHandlerForRedirection.
 */
interface GetCmsCategoryIdHandlerForRedirectionInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsCategoryIdForRedirection $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsCategoryIdForRedirection $query);
}
