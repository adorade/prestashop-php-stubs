<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface BulkUninstallModuleHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\BulkUninstallModuleCommand $command): void;
}
