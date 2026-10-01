<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler;

interface EditQuickAccessHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\EditQuickAccessCommand $command): void;
}
