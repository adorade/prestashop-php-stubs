<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Interface AddSqlRequestHandlerInterface defines contract for SqlRequest creation handler.
 */
interface AddSqlRequestHandlerInterface
{
    /**
     * @param AddSqlRequestCommand $command
     *
     * @return SqlRequestId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\AddSqlRequestCommand $command);
}
