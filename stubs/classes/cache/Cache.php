<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
abstract class CacheCore
{
    /**
     * Name of keys index.
     */
    public const KEYS_NAME = '__keys__';
    /**
     * Name of SQL cache index.
     */
    public const SQL_TABLES_NAME = 'tablesCached';
    /**
     * Store the number of time a query is fetched from the cache.
     *
     * @var array
     */
    protected $queryCounter = [];
    /**
     * @var Cache|null
     */
    protected static $instance;
    /**
     * Max number of queries cached in memcached, for each SQL table.
     *
     * @var int
     */
    protected $maxCachedObjectsByTable = 10000;
    /**
     * If a cache set this variable to true, we need to adjust the size of the table cache object.
     *
     * @var bool
     */
    protected $adjustTableCacheSize = \false;
    /**
     * @var array List all keys of cached data and their associated ttl
     */
    protected $keys = [];
    /**
     * @var array Store list of tables and their associated keys for SQL cache
     */
    protected $sql_tables_cached = [];
    /**
     * @var array List of blacklisted tables for SQL cache, these tables won't be indexed
     */
    protected $blacklist = ['cart', 'cart_cart_rule', 'cart_product', 'connections', 'connections_source', 'connections_page', 'customer', 'customer_group', 'customized_data', 'guest', 'pagenotfound', 'page_viewed', 'employee', 'log'];
    /**
     * @var array Store local cache
     */
    protected static $local = [];
    /**
     * Cache a data.
     *
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     *
     * @return bool
     */
    abstract protected function _set($key, $value, $ttl = 0);
    /**
     * Retrieve a cached data by key.
     *
     * @param string $key
     *
     * @return mixed
     */
    abstract protected function _get($key);
    /**
     * Check if a data is cached by key.
     *
     * @param string $key
     *
     * @return bool
     */
    abstract protected function _exists($key);
    /**
     * Delete a data from the cache by key.
     *
     * @param string $key
     *
     * @return bool
     */
    abstract protected function _delete($key);
    /**
     * Delete multiple keys from the cache.
     *
     * @param array $keyArray
     */
    protected function _deleteMulti(array $keyArray)
    {
    }
    /**
     * Write keys index.
     */
    abstract protected function _writeKeys();
    /**
     * Clean all cached data.
     *
     * @return bool
     */
    abstract public function flush();
    /**
     * @return int
     */
    public function getMaxCachedObjectsByTable()
    {
    }
    /**
     * @param int $maxCachedObjectsByTable
     */
    public function setMaxCachedObjectsByTable($maxCachedObjectsByTable)
    {
    }
    /**
     * @return Cache
     */
    public static function getInstance()
    {
    }
    /**
     * Unit testing purpose only.
     *
     * @param Cache $test_instance
     */
    public static function setInstanceForTesting($test_instance)
    {
    }
    /**
     * If a cache set this variable to true, we need to adjust the size of the table cache object
     * Useful when the cache is reported to be full (e.g. memcached::RES_E2BIG error message).
     *
     * @param bool $value
     */
    protected function setAdjustTableCacheSize($value)
    {
    }
    /**
     * Unit testing purpose only.
     */
    public static function deleteTestingInstance()
    {
    }
    /**
     * Store a data in cache.
     *
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     *
     * @return bool
     */
    public function set($key, $value, $ttl = 0)
    {
    }
    /**
     * Retrieve a data from cache.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
    }
    /**
     * Check if a data is cached.
     *
     * @param string $key
     *
     * @return bool
     */
    public function exists($key)
    {
    }
    /**
     * Delete several keys at once from the cache.
     *
     * @param array $keyArray
     */
    public function deleteMulti(array $keyArray)
    {
    }
    /**
     * Delete one or several data from cache (* joker can be used)
     *  E.g.: delete('*'); delete('my_prefix_*'); delete('my_key_name');.
     *
     * @param string $key
     *
     * @return bool
     */
    public function delete($key)
    {
    }
    /**
     * Increment the query counter for the given query.
     *
     * @param string $query
     */
    public function incrementQueryCounter($query)
    {
    }
    /**
     * Store a query in cache.
     *
     * @param string $query
     * @param array $result
     */
    public function setQuery($query, $result)
    {
    }
    /**
     * Return the hash associated with a query, used to store data into the cache.
     *
     * @param string $query
     *
     * @return string
     */
    public function getQueryHash($query)
    {
    }
    /**
     * Return the hash associated with a table name, used to store the "table to query hash" map.
     *
     * @param string $table
     *
     * @return string
     */
    public function getTableMapCacheKey($table)
    {
    }
    /**
     * Use the query counter to update the query cache statistics
     * So far its only called during a set operation to avoid overloading / slowing down the cache server.
     */
    protected function updateQueryCacheStatistics()
    {
    }
    /**
     * Remove the first less used query results from the cache.
     *
     * @param string $table
     * @param string|null $keyToKeep the key we want to keep inside the table cache
     */
    protected function adjustTableCacheSize($table, $keyToKeep = \null)
    {
    }
    /**
     * Get the tables used in a SQL query.
     *
     * @param string $string
     *
     * @return array|bool
     */
    public function getTables($string)
    {
    }
    /**
     * Delete a query from cache.
     *
     * @param string $query
     */
    public function deleteQuery($query)
    {
    }
    /**
     * Check if a query contain blacklisted tables.
     *
     * @param string $query
     *
     * @return bool
     */
    protected function isBlacklist($query)
    {
    }
    /**
     * @param string $key
     * @param mixed $value
     */
    public static function store($key, $value)
    {
    }
    public static function clear()
    {
    }
    /**
     * @param string $key
     *
     * @return mixed|null The cache item if found, null otherwise
     */
    public static function retrieve($key)
    {
    }
    /**
     * @return array
     */
    public static function retrieveAll()
    {
    }
    /**
     * @param string $key
     *
     * @return bool
     */
    public static function isStored($key)
    {
    }
    /**
     * @param string $key
     */
    public static function clean($key)
    {
    }
}
