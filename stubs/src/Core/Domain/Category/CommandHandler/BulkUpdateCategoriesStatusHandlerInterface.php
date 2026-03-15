<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface UpdateCategoriesStatusHandlerInterface.
 */
interface BulkUpdateCategoriesStatusHandlerInterface
{
    /**
     * @param BulkUpdateCategoriesStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkUpdateCategoriesStatusCommand $command);
}
