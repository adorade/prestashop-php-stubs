<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface BulkDeleteCategoriesHandlerInterface.
 */
interface BulkDeleteCategoriesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkDeleteCategoriesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkDeleteCategoriesCommand $command);
}
