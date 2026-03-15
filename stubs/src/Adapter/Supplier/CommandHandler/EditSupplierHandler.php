<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Handles command which edits supplier using legacy object model
 */
final class EditSupplierHandler extends \PrestaShop\PrestaShop\Adapter\Supplier\AbstractSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\EditSupplierHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\EditSupplierCommand $command)
    {
    }
}
