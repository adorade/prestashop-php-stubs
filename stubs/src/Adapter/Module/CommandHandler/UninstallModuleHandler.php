<?php

namespace PrestaShop\PrestaShop\Adapter\Module\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UninstallModuleHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler\UninstallModuleHandlerInterface
{
    public function __construct(protected \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, protected \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\UninstallModuleCommand $command): void
    {
    }
}
