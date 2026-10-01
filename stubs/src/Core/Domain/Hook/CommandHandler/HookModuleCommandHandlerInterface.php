<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\CommandHandler;

interface HookModuleCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Command\HookModuleCommand $command): void;
}
