<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler;

/**
 * Interface for service that handles adding order message
 */
interface AddOrderMessageHandlerInterface
{
    /**
     * @param AddOrderMessageCommand $command
     *
     * @return OrderMessageId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\AddOrderMessageCommand $command): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId;
}
