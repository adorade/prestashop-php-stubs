<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler;

/**
 * Handles command which deletes order states
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteOrderReturnStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler\AbstractOrderReturnStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler\DeleteOrderReturnStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\DeleteOrderReturnStateCommand $command): void
    {
    }
}
