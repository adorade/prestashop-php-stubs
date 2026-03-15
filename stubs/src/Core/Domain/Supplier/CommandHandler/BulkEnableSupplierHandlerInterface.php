<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Interface BulkEnableSupplierHandlerInterface defines contract for BulkEnableSupplierHandler.
 */
interface BulkEnableSupplierHandlerInterface
{
    /**
     * @param BulkEnableSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkEnableSupplierCommand $command);
}
