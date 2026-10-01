<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler;

/**
 * Class BulkDeleteCmsPageCategoryHandler is responsible for deleting multiple cms page categories.
 */
final class BulkDeleteCmsPageCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler\BulkDeleteCmsPageCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\BulkDeleteCmsPageCategoryCommand $command)
    {
    }
}
