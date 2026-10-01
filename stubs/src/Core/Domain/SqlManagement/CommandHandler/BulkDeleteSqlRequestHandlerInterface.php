<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Interface BulkDeleteSqlRequestHandlerInterface defines contract for bulk deleting handler of SqlRequest.
 */
interface BulkDeleteSqlRequestHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\BulkDeleteSqlRequestCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\BulkDeleteSqlRequestCommand $command);
}
