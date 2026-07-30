<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\CommandHandler;

interface UpdateModulePermissionsHandlerInterface
{
    /**
     * @param UpdateModulePermissionsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command\UpdateModulePermissionsCommand $command): void;
}
