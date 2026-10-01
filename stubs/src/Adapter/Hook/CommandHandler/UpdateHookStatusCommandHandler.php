<?php

namespace PrestaShop\PrestaShop\Adapter\Hook\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateHookStatusCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Hook\CommandHandler\UpdateHookStatusCommandHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Hook\Command\UpdateHookStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Command\UpdateHookStatusCommand $command)
    {
    }
}
