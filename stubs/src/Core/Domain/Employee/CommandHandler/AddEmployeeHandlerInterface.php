<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface for services that handle command which adds new employee
 */
interface AddEmployeeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\AddEmployeeCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId Added employee's ID
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\AddEmployeeCommand $command);
}
