<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class BulkDeleteSupplierHandler is responsible for deleting multiple suppliers.
 */
final class BulkDeleteSupplierHandler extends \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\AbstractDeleteSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\BulkDeleteSupplierHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkDeleteSupplierCommand $command)
    {
    }
}
