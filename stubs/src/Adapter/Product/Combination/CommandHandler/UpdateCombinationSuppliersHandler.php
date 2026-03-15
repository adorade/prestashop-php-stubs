<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

class UpdateCombinationSuppliersHandler extends \PrestaShop\PrestaShop\Adapter\Product\AbstractProductSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\UpdateCombinationSuppliersHandlerInterface
{
    /**
     * @param CombinationRepository $combinationRepository
     * @param ProductSupplierRepository $productSupplierRepository
     * @param ProductSupplierUpdater $productSupplierUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationSuppliersCommand $command): array
    {
    }
}
