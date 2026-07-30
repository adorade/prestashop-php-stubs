<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler;

/**
 * Defines contract for DeleteOrderStateHandler
 */
interface DeleteOrderStateHandlerInterface
{
    /**
     * @param DeleteOrderStateCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\DeleteOrderStateCommand $command): void;
}
