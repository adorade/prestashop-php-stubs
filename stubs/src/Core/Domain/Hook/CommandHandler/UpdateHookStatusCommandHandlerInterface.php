<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\CommandHandler;

/**
 * Interface for service that set hook to be enabled or disabled
 */
interface UpdateHookStatusCommandHandlerInterface
{
    /**
     * @param UpdateHookStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Command\UpdateHookStatusCommand $command);
}
