<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetSqlRequestSettingsHandlerInterface.
 */
interface GetSqlRequestSettingsHandlerInterface
{
    /**
     * @param GetSqlRequestSettings $query
     *
     * @return SqlRequestSettings
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestSettings $query);
}
