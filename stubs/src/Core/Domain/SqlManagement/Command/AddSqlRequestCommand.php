<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * This command creates new SqlRequest entity with provided data.
 */
class AddSqlRequestCommand
{
    /**
     * @param string $name
     * @param string $sql
     *
     * @throws SqlRequestConstraintException
     */
    public function __construct($name, $sql)
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
