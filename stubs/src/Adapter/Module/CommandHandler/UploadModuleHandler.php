<?php

namespace PrestaShop\PrestaShop\Adapter\Module\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UploadModuleHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler\UploadModuleHandlerInterface
{
    public function __construct(protected \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, protected \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\UploadModuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\Module\QueryResult\ModuleInfos
    {
    }
}
