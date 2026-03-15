<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class BulkEnableSupplierHandler is responsible for enabling multiple suppliers.
 */
final class BulkEnableSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\BulkEnableSupplierHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkEnableSupplierCommand $command)
    {
    }
}
