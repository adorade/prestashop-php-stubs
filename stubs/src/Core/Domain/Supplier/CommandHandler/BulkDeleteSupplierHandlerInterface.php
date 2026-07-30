<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Interface BulkDeleteSupplierHandlerInterface defines contract for BulkDeleteSupplierHandler.
 */
interface BulkDeleteSupplierHandlerInterface
{
    /**
     * @param BulkDeleteSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkDeleteSupplierCommand $command);
}
