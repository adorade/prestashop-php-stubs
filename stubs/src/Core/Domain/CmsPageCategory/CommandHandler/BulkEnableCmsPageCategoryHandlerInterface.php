<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface BulkEnableCmsPageCategoryHandlerInterface defines contract for BulkEnableCmsPageCategoryHandler.
 */
interface BulkEnableCmsPageCategoryHandlerInterface
{
    /**
     * @param BulkEnableCmsPageCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\BulkEnableCmsPageCategoryCommand $command);
}
