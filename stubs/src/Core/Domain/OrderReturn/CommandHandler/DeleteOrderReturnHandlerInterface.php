<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler;

interface DeleteOrderReturnHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\DeleteOrderReturnCommand $command): void;
}
