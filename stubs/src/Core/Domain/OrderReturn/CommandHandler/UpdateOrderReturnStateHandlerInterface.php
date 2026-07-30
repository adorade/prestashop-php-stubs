<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler;

interface UpdateOrderReturnStateHandlerInterface
{
    /**
     * @param UpdateOrderReturnStateCommand $command
     *
     * @return void
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\UpdateOrderReturnStateCommand $command): void;
}
