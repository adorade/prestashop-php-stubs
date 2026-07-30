<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface for services that handle command which adds new employee
 */
interface AddEmployeeHandlerInterface
{
    /**
     * @param AddEmployeeCommand $command
     *
     * @return EmployeeId Added employee's ID
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\AddEmployeeCommand $command);
}
