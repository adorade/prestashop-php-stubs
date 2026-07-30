<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Defines contract for AddSupplierHandler
 */
interface AddSupplierHandlerInterface
{
    /**
     * @param AddSupplierCommand $command
     *
     * @return SupplierId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AddSupplierCommand $command);
}
