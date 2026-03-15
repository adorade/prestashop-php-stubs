<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class SqlRequestExecutionResult stores result of SqlRequest SQL query execution result.
 */
class SqlRequestExecutionResult
{
    /**
     * @param array $columns
     * @param array $rows
     */
    public function __construct(array $columns, array $rows)
    {
    }
    /**
     * @return array
     */
    public function getColumns()
    {
    }
    /**
     * @return array
     */
    public function getRows()
    {
    }
}
