<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\CommandHandler;

interface EditHookedModuleCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Command\EditHookedModuleCommand $command): void;
}
