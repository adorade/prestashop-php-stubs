<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler;

/**
 * Defines contract to handle @see SetSuppliersCommand
 */
interface SetSuppliersHandlerInterface
{
    /**
     * @param SetSuppliersCommand $command
     *
     * @return ProductSupplierAssociation[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\SetSuppliersCommand $command): array;
}
