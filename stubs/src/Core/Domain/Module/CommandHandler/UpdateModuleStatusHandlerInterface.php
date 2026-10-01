<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface UpdateModuleStatusHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\UpdateModuleStatusCommand $command): void;
}
