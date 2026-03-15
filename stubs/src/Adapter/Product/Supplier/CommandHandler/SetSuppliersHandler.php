<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler;

/**
 * Handles @see SetSuppliersCommand using legacy object model
 */
class SetSuppliersHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler\SetSuppliersHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\SetSuppliersCommand $command): array
    {
    }
}
