<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface BulkDeleteCategoriesHandlerInterface.
 */
interface BulkDeleteCategoriesHandlerInterface
{
    /**
     * @param BulkDeleteCategoriesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkDeleteCategoriesCommand $command);
}
