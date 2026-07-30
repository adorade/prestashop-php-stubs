<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class DeleteSupplierHandler is responsible for deleting the supplier.
 */
final class DeleteSupplierHandler extends \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\AbstractDeleteSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\DeleteSupplierHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\DeleteSupplierCommand $command)
    {
    }
}
