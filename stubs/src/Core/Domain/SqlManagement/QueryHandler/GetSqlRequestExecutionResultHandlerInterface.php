<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetSqlRequestResultForViewingHandlerInterface defines contract for getting SqlRequest SQL query result.
 */
interface GetSqlRequestExecutionResultHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestExecutionResult $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\SqlRequestExecutionResult
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestExecutionResult $query);
}
