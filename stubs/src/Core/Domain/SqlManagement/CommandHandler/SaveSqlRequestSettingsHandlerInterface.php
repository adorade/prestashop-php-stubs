<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Interface SaveSqlRequestSettingsHandlerInterface.
 */
interface SaveSqlRequestSettingsHandlerInterface
{
    /**
     * @param SaveSqlRequestSettingsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\SaveSqlRequestSettingsCommand $command);
}
