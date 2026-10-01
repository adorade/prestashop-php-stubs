<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler;

interface ToggleQuickAccessNewWindowHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\ToggleQuickAccessNewWindowCommand $command): void;
}
