<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler;

/**
 * Interface for service that handles command that adds new order return state
 */
interface AddOrderReturnStateHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\AddOrderReturnStateCommand $command);
}
