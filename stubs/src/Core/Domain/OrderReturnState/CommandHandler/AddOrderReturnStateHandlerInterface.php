<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler;

/**
 * Interface for service that handles command that adds new order return state
 */
interface AddOrderReturnStateHandlerInterface
{
    /**
     * @return OrderReturnStateId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\AddOrderReturnStateCommand $command);
}
