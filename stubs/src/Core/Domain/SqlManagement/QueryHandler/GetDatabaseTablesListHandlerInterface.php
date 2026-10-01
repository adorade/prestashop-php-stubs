<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetDatabaseTablesListHandlerInterface.
 */
interface GetDatabaseTablesListHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTablesList $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\DatabaseTablesList
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTablesList $query);
}
