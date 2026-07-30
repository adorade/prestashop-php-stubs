<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Interface BulkDisableSupplierHandlerInterface defines contract for BulkDisableSupplierHandler.
 */
interface BulkDisableSupplierHandlerInterface
{
    /**
     * @param BulkDisableSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkDisableSupplierCommand $command);
}
