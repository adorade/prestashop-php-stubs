<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface UninstallModuleHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\UninstallModuleCommand $command): void;
}
