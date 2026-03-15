<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Interface DeleteSupplierHandlerInterface defines contract for DeleteSupplierHandler.
 */
interface DeleteSupplierHandlerInterface
{
    /**
     * @param DeleteSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\DeleteSupplierCommand $command);
}
