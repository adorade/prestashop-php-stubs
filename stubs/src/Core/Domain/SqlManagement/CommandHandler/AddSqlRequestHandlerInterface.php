<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Interface AddSqlRequestHandlerInterface defines contract for SqlRequest creation handler.
 */
interface AddSqlRequestHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\AddSqlRequestCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\AddSqlRequestCommand $command);
}
