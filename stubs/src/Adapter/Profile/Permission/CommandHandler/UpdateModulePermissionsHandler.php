<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Permission\CommandHandler;

/**
 * Updates permissions for modules using legacy object model
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateModulePermissionsHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\CommandHandler\UpdateModulePermissionsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command\UpdateModulePermissionsCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Exception\PermissionUpdateException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command\UpdateModulePermissionsCommand $command): void
    {
    }
}
