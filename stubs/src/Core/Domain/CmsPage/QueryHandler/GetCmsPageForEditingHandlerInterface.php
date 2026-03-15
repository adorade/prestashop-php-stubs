<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler;

/**
 * Interface for service that handles getCmsPageForEditing query
 */
interface GetCmsPageForEditingHandlerInterface
{
    /**
     * @param GetCmsPageForEditing $query
     *
     * @return EditableCmsPage
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsPageForEditing $query);
}
