<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\QueryHandler;

/**
 * Class GetCmsPageParentCategoryIdForRedirectionHandler is responsible for providing cms page categories parent id
 * for redirecting to the right controller after create, edit, delete, toggle actions.
 */
final class GetCmsPageParentCategoryIdForRedirectionHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler\GetCmsPageParentCategoryIdForRedirectionHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageParentCategoryIdForRedirection $query)
    {
    }
}
