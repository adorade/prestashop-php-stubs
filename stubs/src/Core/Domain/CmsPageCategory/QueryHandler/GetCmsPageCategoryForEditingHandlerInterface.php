<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler;

/**
 * Interface GetCmsPageCategoryForEditingHandlerInterface defines contract for GetCmsPageCategoryForEditingHandler.
 */
interface GetCmsPageCategoryForEditingHandlerInterface
{
    /**
     * @param GetCmsPageCategoryForEditing $query
     *
     * @return EditableCmsPageCategory
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoryForEditing $query);
}
