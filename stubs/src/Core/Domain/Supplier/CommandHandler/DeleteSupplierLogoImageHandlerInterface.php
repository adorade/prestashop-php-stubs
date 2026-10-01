<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler;

/**
 * Defines contract for DeleteSupplierLogoImageHandler
 */
interface DeleteSupplierLogoImageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Supplier\Command\DeleteSupplierLogoImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\DeleteSupplierLogoImageCommand $command): void;
}
