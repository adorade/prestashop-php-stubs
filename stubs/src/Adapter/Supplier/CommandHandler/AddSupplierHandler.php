<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Handles command which adds new supplier using legacy object model
 */
final class AddSupplierHandler extends \PrestaShop\PrestaShop\Adapter\Supplier\AbstractSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\AddSupplierHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\AddSupplierCommand $command)
    {
    }
}
