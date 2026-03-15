<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage\CommandHandler;

/**
 * Handles deleting order message using object model
 *
 * @internal
 */
final class DeleteOrderMessageHandler extends \PrestaShop\PrestaShop\Adapter\OrderMessage\AbstractOrderMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler\DeleteOrderMessageHandlerInterface
{
    /**
     * @param DeleteOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\DeleteOrderMessageCommand $command): void
    {
    }
}
