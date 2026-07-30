<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class EditableSqlRequest stores information about SqlRequest that can be edited.
 */
class EditableSqlRequest
{
    /**
     * @param SqlRequestId $requestSqlId
     * @param string $name
     * @param string $sql
     *
     * @throws SqlRequestException
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $requestSqlId, $name, $sql)
    {
    }
    /**
     * @return SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getSql()
    {
    }
}
