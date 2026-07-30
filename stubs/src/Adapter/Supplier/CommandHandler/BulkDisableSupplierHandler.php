<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class BulkDisableSupplierHandler is responsible for disabling multiple suppliers.
 */
final class BulkDisableSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\BulkDisableSupplierHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\BulkDisableSupplierCommand $command)
    {
    }
}
