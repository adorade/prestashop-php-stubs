<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetAttributesForDatabaseTableHandlerInterface.
 */
interface GetDatabaseTableFieldsListHandlerInterface
{
    /**
     * @param GetDatabaseTableFieldsList $query
     *
     * @return DatabaseTableFields
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTableFieldsList $query);
}
