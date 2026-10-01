<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface ToggleEmployeeStatusHandlerInterface.
 */
interface ToggleEmployeeStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\ToggleEmployeeStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\ToggleEmployeeStatusCommand $command);
}
