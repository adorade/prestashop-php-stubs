<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler;

/**
 * Handles command which deletes OrderStatees in bulk action
 */
class BulkDeleteOrderStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler\AbstractOrderStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler\BulkDeleteOrderStateHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws BulkDeleteOrderStateException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\BulkDeleteOrderStateCommand $command): void
    {
    }
}
