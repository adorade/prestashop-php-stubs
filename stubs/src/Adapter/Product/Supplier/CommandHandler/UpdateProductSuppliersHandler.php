<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler;

/**
 * Handles @see UpdateProductSuppliersCommand using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateProductSuppliersHandler extends \PrestaShop\PrestaShop\Adapter\Product\AbstractProductSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler\UpdateProductSuppliersHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\UpdateProductSuppliersCommand $command): array
    {
    }
}
