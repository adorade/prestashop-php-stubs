<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\CommandHandler;

interface UpdateTabPermissionsHandlerInterface
{
    /**
     * @param UpdateTabPermissionsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command\UpdateTabPermissionsCommand $command): void;
}
