<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler;

interface BulkDeleteOrderReturnsHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\BulkDeleteOrderReturnsCommand $command): void;
}
