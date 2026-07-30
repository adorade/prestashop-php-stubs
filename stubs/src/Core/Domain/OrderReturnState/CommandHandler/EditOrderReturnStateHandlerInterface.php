<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler;

/**
 * Interface for service that handles order return  state editing command
 */
interface EditOrderReturnStateHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\EditOrderReturnStateCommand $command);
}
