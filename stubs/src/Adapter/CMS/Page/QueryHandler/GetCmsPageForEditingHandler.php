<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\QueryHandler;

/**
 * Gets cms page for editing
 */
final class GetCmsPageForEditingHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler\GetCmsPageForEditingHandlerInterface
{
    /**
     * @param Link $link
     * @param int $langId
     */
    public function __construct(\Link $link, $langId)
    {
    }
    /**
     * @param GetCmsPageForEditing $query
     *
     * @return EditableCmsPage
     *
     * @throws CmsPageException
     * @throws CmsPageCategoryException
     * @throws CmsPageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsPageForEditing $query)
    {
    }
}
