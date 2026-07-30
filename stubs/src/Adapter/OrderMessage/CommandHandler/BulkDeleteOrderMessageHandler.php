<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage\CommandHandler;

/**
 * Deletes Order messages in bulk action using object model
 *
 * @internal
 */
final class BulkDeleteOrderMessageHandler extends \PrestaShop\PrestaShop\Adapter\OrderMessage\AbstractOrderMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler\BulkDeleteOrderMessageHandlerInterface
{
    /**
     * @param BulkDeleteOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\BulkDeleteOrderMessageCommand $command): void
    {
    }
}
