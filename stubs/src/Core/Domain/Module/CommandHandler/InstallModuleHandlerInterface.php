<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface InstallModuleHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\InstallModuleCommand $command): void;
}
