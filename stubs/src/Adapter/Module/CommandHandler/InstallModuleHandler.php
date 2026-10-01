<?php

namespace PrestaShop\PrestaShop\Adapter\Module\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class InstallModuleHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler\InstallModuleHandlerInterface
{
    public function __construct(protected \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, protected \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\InstallModuleCommand $command): void
    {
    }
}
