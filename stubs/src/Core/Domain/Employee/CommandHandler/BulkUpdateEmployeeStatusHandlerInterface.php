<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

/**
 * Interface UpdateEmployeeStatusHandlerInterface.
 */
interface BulkUpdateEmployeeStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\BulkUpdateEmployeeStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\BulkUpdateEmployeeStatusCommand $command);
}
