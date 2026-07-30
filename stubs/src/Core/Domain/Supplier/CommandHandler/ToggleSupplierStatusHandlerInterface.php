<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Interface ToggleSupplierStatusHandlerInterface defines contract for ToggleSupplierStatusHandler.
 */
interface ToggleSupplierStatusHandlerInterface
{
    /**
     * @param ToggleSupplierStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\ToggleSupplierStatusCommand $command);
}
