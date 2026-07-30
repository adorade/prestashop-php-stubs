<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler;

/**
 * Handles @see SetProductDefaultSupplierCommand using legacy object model
 */
class SetProductDefaultSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandlerInterface
{
    /**
     * @param ProductSupplierUpdater $productSupplierUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\SetProductDefaultSupplierCommand $command): void
    {
    }
}
