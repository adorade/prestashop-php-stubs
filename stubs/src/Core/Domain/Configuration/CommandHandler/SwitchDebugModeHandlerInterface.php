<?php

namespace PrestaShop\PrestaShop\Core\Domain\Configuration\CommandHandler;

/**
 * Interface for service that implements debug mode switching
 */
interface SwitchDebugModeHandlerInterface
{
    /**
     * @param SwitchDebugModeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Configuration\Command\SwitchDebugModeCommand $command);
}
