<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class DatabaseTableFields stores fields of single database table.
 */
class DatabaseTableFields
{
    /**
     * @param DatabaseTableField[] $fields
     *
     * @throws SqlManagementConstraintException
     */
    public function __construct(array $fields)
    {
    }
    /**
     * @return DatabaseTableField[]
     */
    public function getFields()
    {
    }
}
