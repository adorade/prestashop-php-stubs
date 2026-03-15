<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Permission\CommandHandler;

/**
 * Updates permissions for modules using legacy object model
 *
 * @internal
 */
final class UpdateModulePermissionsHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\CommandHandler\UpdateModulePermissionsHandlerInterface
{
    /**
     * @param UpdateModulePermissionsCommand $command
     *
     * @throws PermissionUpdateException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command\UpdateModulePermissionsCommand $command): void
    {
    }
}
