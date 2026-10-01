<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage\CommandHandler;

/**
 * Deletes Order messages in bulk action using object model
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteOrderMessageHandler extends \PrestaShop\PrestaShop\Adapter\OrderMessage\AbstractOrderMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler\BulkDeleteOrderMessageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\BulkDeleteOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\BulkDeleteOrderMessageCommand $command): void
    {
    }
}
