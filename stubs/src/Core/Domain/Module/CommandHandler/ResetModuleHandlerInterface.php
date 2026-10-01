<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface ResetModuleHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\ResetModuleCommand $command): void;
}
