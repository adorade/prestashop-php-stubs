<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Interface GetSqlRequestResultForViewingHandlerInterface defines contract for getting SqlRequest SQL query result.
 */
interface GetSqlRequestExecutionResultHandlerInterface
{
    /**
     * @param GetSqlRequestExecutionResult $query
     *
     * @return SqlRequestExecutionResult
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestExecutionResult $query);
}
