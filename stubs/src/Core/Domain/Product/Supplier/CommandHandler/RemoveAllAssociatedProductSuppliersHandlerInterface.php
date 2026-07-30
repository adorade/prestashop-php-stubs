<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllAssociatedProductSuppliersCommand
 */
interface RemoveAllAssociatedProductSuppliersHandlerInterface
{
    /**
     * @param RemoveAllAssociatedProductSuppliersCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command\RemoveAllAssociatedProductSuppliersCommand $command): void;
}
