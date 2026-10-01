<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Interface DeleteSqlRequestHandlerInterface defines contract for SqlRequest delete handler.
 */
interface DeleteSqlRequestHandlerInterface
{
    /**
     * Delete SqlRequest.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\DeleteSqlRequestCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\DeleteSqlRequestCommand $command);
}
