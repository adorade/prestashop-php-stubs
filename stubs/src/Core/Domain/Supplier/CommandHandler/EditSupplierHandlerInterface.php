<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Defines contract for EditSupplierHandler
 */
interface EditSupplierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\EditSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\EditSupplierCommand $command);
}
