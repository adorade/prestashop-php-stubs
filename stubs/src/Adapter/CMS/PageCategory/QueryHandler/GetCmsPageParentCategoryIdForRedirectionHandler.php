<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\QueryHandler;

/**
 * Class GetCmsPageParentCategoryIdForRedirectionHandler is responsible for providing cms page categories parent id
 * for redirecting to the right controller after create, edit, delete, toggle actions.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCmsPageParentCategoryIdForRedirectionHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler\GetCmsPageParentCategoryIdForRedirectionHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageParentCategoryIdForRedirection $query)
    {
    }
}
