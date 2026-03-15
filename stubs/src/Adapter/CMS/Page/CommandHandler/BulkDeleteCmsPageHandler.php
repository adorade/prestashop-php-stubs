<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler;

/**
 * Deletes multiple cms pages
 */
final class BulkDeleteCmsPageHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler\BulkDeleteCmsPageHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDeleteCmsPageCommand $command)
    {
    }
}
