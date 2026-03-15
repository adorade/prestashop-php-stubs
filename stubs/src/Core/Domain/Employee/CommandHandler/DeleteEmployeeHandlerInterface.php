<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface DeleteEmployeeHandlerInterface.
 */
interface DeleteEmployeeHandlerInterface
{
    /**
     * @param DeleteEmployeeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\DeleteEmployeeCommand $command);
}
