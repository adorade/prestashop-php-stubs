<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface BulkDeleteEmployeeHandlerInterface.
 */
interface BulkDeleteEmployeeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\BulkDeleteEmployeeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\BulkDeleteEmployeeCommand $command);
}
