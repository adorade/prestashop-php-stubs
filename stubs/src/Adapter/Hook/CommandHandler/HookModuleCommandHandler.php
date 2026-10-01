<?php

namespace PrestaShop\PrestaShop\Adapter\Hook\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class HookModuleCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Hook\CommandHandler\HookModuleCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Command\HookModuleCommand $command): void
    {
    }
}
