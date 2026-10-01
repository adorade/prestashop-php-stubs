<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler;

/**
 * Interface for service that handles getCmsPageForEditing query
 */
interface GetCmsPageForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsPageForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryResult\EditableCmsPage
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsPageForEditing $query);
}
