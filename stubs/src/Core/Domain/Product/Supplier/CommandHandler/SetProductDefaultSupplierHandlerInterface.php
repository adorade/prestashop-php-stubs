<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler;

/**
 * Defines contract to handle @see SetProductDefaultSupplierCommand
 */
interface SetProductDefaultSupplierHandlerInterface
{
    /**
     * @param SetProductDefaultSupplierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\SetProductDefaultSupplierCommand $command): void;
}
