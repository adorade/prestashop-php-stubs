<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class DatabaseTablesList stores list of database tables.
 */
class DatabaseTablesList
{
    /**
     * @param string[] $dbTables
     *
     * @throws SqlRequestException
     */
    public function __construct(array $dbTables)
    {
    }
    /**
     * @return string[]
     */
    public function getTables()
    {
    }
}
