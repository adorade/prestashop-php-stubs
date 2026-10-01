<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler;

interface DeleteQuickAccessHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\DeleteQuickAccessCommand $command): void;
}
