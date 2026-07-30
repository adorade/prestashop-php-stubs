<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler;

/**
 * Interface for service that handles deleting order message
 */
interface DeleteOrderMessageHandlerInterface
{
    /**
     * @param DeleteOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\DeleteOrderMessageCommand $command): void;
}
