<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler;

interface BulkDeleteProductsFromOrderReturnHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\BulkDeleteProductsFromOrderReturnCommand $command): void;
}
