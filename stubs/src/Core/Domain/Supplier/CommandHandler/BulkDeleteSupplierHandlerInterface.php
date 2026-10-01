<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Interface BulkDeleteSupplierHandlerInterface defines contract for BulkDeleteSupplierHandler.
 */
interface BulkDeleteSupplierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkDeleteSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkDeleteSupplierCommand $command);
}
