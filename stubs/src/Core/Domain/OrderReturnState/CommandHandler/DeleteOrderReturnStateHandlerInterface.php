<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler;

/**
 * Defines contract for DeleteOrderStateHandler
 */
interface DeleteOrderReturnStateHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\DeleteOrderReturnStateCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\DeleteOrderReturnStateCommand $command): void;
}
