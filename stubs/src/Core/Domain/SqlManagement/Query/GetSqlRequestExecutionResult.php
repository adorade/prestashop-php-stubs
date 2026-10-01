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
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     */
    public function __construct($requestSqlId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
}
