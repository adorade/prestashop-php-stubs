<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Defines contract for DeleteSupplierLogoImageHandler
 */
interface DeleteSupplierLogoImageHandlerInterface
{
    /**
     * @param DeleteSupplierLogoImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\DeleteSupplierLogoImageCommand $command): void;
}
