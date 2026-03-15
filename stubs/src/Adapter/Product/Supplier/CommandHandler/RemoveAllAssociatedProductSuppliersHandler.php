<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler;

/**
 * Handles @see RemoveAllAssociatedProductSuppliersCommand using legacy object model
 */
final class RemoveAllAssociatedProductSuppliersHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler\RemoveAllAssociatedProductSuppliersHandlerInterface
{
    /**
     * @param ProductSupplierUpdater $productSupplierUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\RemoveAllAssociatedProductSuppliersCommand $command): void
    {
    }
}
