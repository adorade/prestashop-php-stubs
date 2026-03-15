<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface BulkDisableCmsPageCategoryHandlerInterface defines contract for BulkDisableCmsPageCategoryHandler.
 */
interface BulkDisableCmsPageCategoryHandlerInterface
{
    /**
     * @param BulkDisableCmsPageCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\BulkDisableCmsPageCategoryCommand $command);
}
