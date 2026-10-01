<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

interface UploadModuleHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\UploadModuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\Module\QueryResult\ModuleInfos;
}
