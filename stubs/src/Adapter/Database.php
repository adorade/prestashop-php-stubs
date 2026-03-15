<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Adapter for Db legacy class.
 */
class Database implements \PrestaShop\PrestaShop\Core\Foundation\Database\DatabaseInterface
{
    /**
     * Perform a SELECT sql statement.
     *
     * @param string $sqlString
     *
     * @return array|false
     *
     * @throws \PrestaShopDatabaseException
     */
    public function select($sqlString)
    {
    }
    /**
     * Escape $unsafe to be used into a SQL statement.
     *
     * @param string $unsafeData
     *
     * @return string
     */
    public function escape($unsafeData)
    {
    }
    /**
     * Returns a value from the first row, first column of a SELECT query.
     *
     * @param string|DbQuery $sql
     * @param bool $useMaster
     * @param bool $useCache
     *
     * @return string|false|null
     */
    public function getValue($sql, $useMaster = true, $useCache = true)
    {
    }
    /**
     * Returns the text of the error message from previous database operation.
     *
     * @return string
     */
    public function getErrorMessage()
    {
    }
    /**
     * Enable the cache.
     */
    public function enableCache()
    {
    }
    /**
     * Disable the cache.
     */
    public function disableCache()
    {
    }
}
