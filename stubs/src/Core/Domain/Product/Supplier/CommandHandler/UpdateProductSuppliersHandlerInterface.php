<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler;

/**
 * Defines contract to handle @see UpdateProductSuppliersCommand
 */
interface UpdateProductSuppliersHandlerInterface
{
    /**
     * @param UpdateProductSuppliersCommand $command
     *
     * @return ProductSupplierAssociation[] new product suppliers ids list
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\UpdateProductSuppliersCommand $command): array;
}
