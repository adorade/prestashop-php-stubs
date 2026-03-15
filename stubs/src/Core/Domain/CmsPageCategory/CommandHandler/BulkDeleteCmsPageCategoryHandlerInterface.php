<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface BulkDeleteCmsPageCategoryHandlerInterface defines contract for BulkDeleteCmsPageCategoryHandler.
 */
interface BulkDeleteCmsPageCategoryHandlerInterface
{
    /**
     * @param BulkDeleteCmsPageCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\BulkDeleteCmsPageCategoryCommand $command);
}
