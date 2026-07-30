<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler;

/**
 * Interface for service that handles editing order message
 */
interface EditOrderMessageHandlerInterface
{
    /**
     * @param EditOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\EditOrderMessageCommand $command): void;
}
