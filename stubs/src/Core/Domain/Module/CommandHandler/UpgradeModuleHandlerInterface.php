<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface UpgradeModuleHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\UpgradeModuleCommand $command): void;
}
