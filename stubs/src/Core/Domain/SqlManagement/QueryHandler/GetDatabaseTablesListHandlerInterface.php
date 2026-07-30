<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetDatabaseTablesListHandlerInterface.
 */
interface GetDatabaseTablesListHandlerInterface
{
    /**
     * @param GetDatabaseTablesList $query
     *
     * @return DatabaseTablesList
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTablesList $query);
}
