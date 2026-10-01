<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\QueryHandler;

/**
 * Gets cms page for editing
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCmsPageForEditingHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler\GetCmsPageForEditingHandlerInterface
{
    /**
     * @param \Link $link
     * @param int $langId
     */
    public function __construct(\Link $link, $langId)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsPageForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryResult\EditableCmsPage
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsPageForEditing $query)
    {
    }
}
