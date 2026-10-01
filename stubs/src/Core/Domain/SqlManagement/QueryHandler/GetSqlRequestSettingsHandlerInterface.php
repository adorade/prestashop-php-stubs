<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetSqlRequestSettingsHandlerInterface.
 */
interface GetSqlRequestSettingsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestSettings $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\SqlRequestSettings
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestSettings $query);
}
