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
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     */
    public function __construct($requestSqlId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId
     */
    public function getRequestSqlId()
    {
    }
}
