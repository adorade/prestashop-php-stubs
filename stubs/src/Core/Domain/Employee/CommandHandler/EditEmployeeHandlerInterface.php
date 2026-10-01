<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface for services that handle command which edits employee.
 */
interface EditEmployeeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\EditEmployeeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\EditEmployeeCommand $command);
}
