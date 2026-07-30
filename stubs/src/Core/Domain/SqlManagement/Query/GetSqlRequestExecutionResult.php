<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query;

/**
 * Class GetSqlRequestExecutionResultQuery returns the result of executing an SqlRequest query.
 */
class GetSqlRequestExecutionResult
{
    /**
     * @param int $requestSqlId
     *
     * @throws SqlRequestException
     */
    public function __construct($requestSqlId)
    {
    }
    /**
     * @return SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
}
