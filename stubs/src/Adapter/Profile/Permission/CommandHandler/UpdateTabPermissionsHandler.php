<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Permission\CommandHandler;

/**
 * Updates permissions for tab (Menu) using legacy object model
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateTabPermissionsHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\CommandHandler\UpdateTabPermissionsHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command\UpdateTabPermissionsCommand $command): void
    {
    }
}
