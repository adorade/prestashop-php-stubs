<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query;

/**
 * Class GetSqlRequestForEditingQuery gets SqlRequest data that can be edited.
 */
class GetSqlRequestForEditing
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
    public function getRequestSqlId()
    {
    }
}
