<?php

namespace PrestaShop\PrestaShop\Adapter\Hook\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditHookedModuleCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Hook\CommandHandler\EditHookedModuleCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Command\EditHookedModuleCommand $command): void
    {
    }
}
