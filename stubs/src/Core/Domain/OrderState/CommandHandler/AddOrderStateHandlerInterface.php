<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler;

/**
 * Interface for service that handles command that adds new order state
 */
interface AddOrderStateHandlerInterface
{
    /**
     * @return OrderStateId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\AddOrderStateCommand $command);
}
