<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler;

interface BulkDeleteQuickAccessHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\BulkDeleteQuickAccessCommand $command): void;
}
