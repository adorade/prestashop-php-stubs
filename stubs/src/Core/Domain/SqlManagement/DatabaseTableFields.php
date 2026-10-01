<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class DatabaseTableFields stores fields of single database table.
 */
class DatabaseTableFields
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\DatabaseTableField[] $fields
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlManagementConstraintException
     */
    public function __construct(array $fields)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\DatabaseTableField[]
     */
    public function getFields()
    {
    }
}
