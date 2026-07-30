<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler;

/**
 * Handles @see UpdateProductSuppliersCommand using legacy object model
 */
final class UpdateProductSuppliersHandler extends \PrestaShop\PrestaShop\Adapter\Product\AbstractProductSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler\UpdateProductSuppliersHandlerInterface
{
    /**
     * @param ProductSupplierUpdater $productSupplierUpdater
     * @param ProductSupplierRepository $productSupplierRepository
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
