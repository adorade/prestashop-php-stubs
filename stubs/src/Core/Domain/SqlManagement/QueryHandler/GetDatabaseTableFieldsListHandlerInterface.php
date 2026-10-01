<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetAttributesForDatabaseTableHandlerInterface.
 */
interface GetDatabaseTableFieldsListHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTableFieldsList $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\DatabaseTableFields
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTableFieldsList $query);
}
