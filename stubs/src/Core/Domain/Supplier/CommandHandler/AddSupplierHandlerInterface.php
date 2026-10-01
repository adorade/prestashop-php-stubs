<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Defines contract for AddSupplierHandler
 */
interface AddSupplierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AddSupplierCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AddSupplierCommand $command);
}
