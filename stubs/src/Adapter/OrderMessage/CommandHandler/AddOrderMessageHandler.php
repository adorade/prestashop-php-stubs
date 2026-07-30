<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage\CommandHandler;

/**
 * Handles adding new order message using legacy object model
 *
 * @internal
 */
final class AddOrderMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler\AddOrderMessageHandlerInterface
{
    /**
     * @param AddOrderMessageCommand $command
     *
     * @return OrderMessageId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\AddOrderMessageCommand $command): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
    {
    }
}
