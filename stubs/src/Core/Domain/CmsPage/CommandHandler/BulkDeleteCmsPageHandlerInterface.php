<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Defines contract for BulkDeleteCmsPageHandler.
 */
interface BulkDeleteCmsPageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDeleteCmsPageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDeleteCmsPageCommand $command);
}
