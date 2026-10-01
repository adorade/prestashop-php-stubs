<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler;

/**
 * Interface GetCmsPageCategoryForEditingHandlerInterface defines contract for GetCmsPageCategoryForEditingHandler.
 */
interface GetCmsPageCategoryForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoryForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryResult\EditableCmsPageCategory
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoryForEditing $query);
}
