<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see UpdateCombinationSuppliersCommand
 */
interface UpdateCombinationSuppliersHandlerInterface
{
    /**
     * @param UpdateCombinationSuppliersCommand $command
     *
     * @return ProductSupplierAssociation[] new product combination suppliers ids list
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationSuppliersCommand $command): array;
}
