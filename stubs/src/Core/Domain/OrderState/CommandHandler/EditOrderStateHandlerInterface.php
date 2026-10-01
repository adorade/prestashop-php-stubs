<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler;

/**
 * Interface for service that handles order state editing command
 */
interface EditOrderStateHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\EditOrderStateCommand $command);
}
