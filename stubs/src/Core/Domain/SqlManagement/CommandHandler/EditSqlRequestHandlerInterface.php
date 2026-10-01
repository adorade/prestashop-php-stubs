<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Interface EditSqlRequestHandlerInterface defines contract SqlRequest editing handler.
 */
interface EditSqlRequestHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\EditSqlRequestCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\EditSqlRequestCommand $command);
}
