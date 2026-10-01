<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler;

interface BulkUpdateDiscountsStatusHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\BulkUpdateDiscountsStatusCommand $command): void;
}
