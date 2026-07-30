<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Defines contract for BulkDisableCmsPageHandler.
 */
interface BulkDisableCmsPageHandlerInterface
{
    /**
     * @param BulkDisableCmsPageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDisableCmsPageCommand $command);
}
