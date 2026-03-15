<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query;

/**
 * Class GetAttributesForDatabaseTableQuery gets list of attributes for given database table name.
 */
class GetDatabaseTableFieldsList
{
    /**
     * @param string $tableName
     *
     * @throws SqlManagementConstraintException
     */
    public function __construct($tableName)
    {
    }
    /**
     * @return string
     */
    public function getTableName()
    {
    }
    /**
     * @param string $tableName
     *
     * @return self
     *
     * @throws SqlManagementConstraintException
     */
    public function setTableName($tableName)
    {
    }
}
