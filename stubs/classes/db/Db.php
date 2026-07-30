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
/**
 * Class DbCore.
 */
abstract class DbCore
{
    /** @var int Constant used by insert() method */
    public const INSERT = 1;
    /** @var int Constant used by insert() method */
    public const INSERT_IGNORE = 2;
    /** @var int Constant used by insert() method */
    public const REPLACE = 3;
    /** @var int Constant used by insert() method */
    public const ON_DUPLICATE_KEY = 4;
    /** @var string Server (eg. localhost) */
    protected $server;
    /** @var string Database user (eg. root) */
    protected $user;
    /** @var string Database password (eg. can be empty !) */
    protected $password;
    /** @var string Database name */
    protected $database;
    /** @var bool */
    protected $is_cache_enabled;
    /** @var PDO|mysqli|resource|null Resource link */
    protected $link;
    /** @var PDOStatement|mysqli_result|resource|bool SQL cached result */
    protected $result;
    /** @var array List of DB instances */
    public static $instance = [];
    /** @var array List of server settings */
    public static $_servers = [];
    /** @var bool|null Flag used to load slave servers only once.
     * See loadSlaveServers() method
     */
    public static $_slave_servers_loaded = \null;
    /**
     * Store last executed query.
     *
     * @var string
     */
    protected $last_query;
    /**
     * Store hash of the last executed query.
     *
     * @var string
     */
    protected $last_query_hash;
    /**
     * Last cached query.
     *
     * @var bool
     */
    protected $last_cached;
    /**
     * Opens a database connection.
     *
     * @return PDO|mysqli|resource
     */
    abstract public function connect();
    /**
     * Closes database connection.
     */
    abstract public function disconnect();
    /**
     * Execute a query and get result resource.
     *
     * @param string $sql
     *
     * @return PDOStatement|mysqli_result|resource|bool
     */
    abstract protected function _query($sql);
    /**
     * Get number of rows in a result.
     *
     * @param mixed $result
     *
     * @return int
     */
    abstract protected function _numRows($result);
    /**
     * Get the ID generated from the previous INSERT operation.
     *
     * @return int|string
     */
    abstract public function Insert_ID();
    /**
     * Get number of affected rows in previous database operation.
     *
     * @return int
     */
    abstract public function Affected_Rows();
    /**
     * Get next row for a query which does not return an array.
     *
     * @param PDOStatement|mysqli_result|resource|bool $result
     *
     * @return array|object|false|null
     */
    abstract public function nextRow($result = \false);
    /**
     * Get all rows for a query which return an array.
     *
     * @param PDOStatement|mysqli_result|resource|bool|null $result
     *
     * @return array
     */
    abstract protected function getAll($result = \false);
    /**
     * Get database version.
     *
     * @return string
     */
    abstract public function getVersion();
    /**
     * Protect string against SQL injections.
     *
     * @param string $str
     *
     * @return string
     */
    abstract public function _escape($str);
    /**
     * Returns the text of the error message from previous database operation.
     *
     * @return string
     */
    abstract public function getMsgError();
    /**
     * Returns the number of the error from previous database operation.
     *
     * @return int
     */
    abstract public function getNumberError();
    /**
     * Sets the current active database on the server that's associated with the specified link identifier.
     * Do not remove, useful for some modules.
     *
     * @param string $db_name
     *
     * @return bool|int
     */
    abstract public function set_db($db_name);
    /**
     * Selects best table engine.
     *
     * @return string
     */
    abstract public function getBestEngine();
    /**
     * Returns database object instance.
     *
     * @param bool $master Decides whether the connection to be returned by the master server or the slave server
     *
     * @return Db Singleton instance of Db object
     */
    public static function getInstance($master = \true)
    {
    }
    public function getPrefix()
    {
    }
    /**
     * @param Db $test_db
     *                    Unit testing purpose only
     */
    public static function setInstanceForTesting($test_db)
    {
    }
    /**
     * Unit testing purpose only.
     */
    public static function deleteTestingInstance()
    {
    }
    /**
     * Loads configuration settings for slave servers if needed.
     */
    protected static function loadSlaveServers()
    {
    }
    /**
     * Returns the best child layer database class.
     *
     * @return string
     */
    public static function getClass()
    {
    }
    /**
     * Instantiates a database connection.
     *
     * @param string $server Server address
     * @param string $user User login
     * @param string $password User password
     * @param string $database Database name
     * @param bool $connect If false, don't connect in constructor (since 1.5.0.1)
     */
    public function __construct($server, $user, $password, $database, $connect = \true)
    {
    }
    /**
     * Disable the use of the cache.
     */
    public function disableCache()
    {
    }
    /**
     * Enable & flush the cache.
     */
    public function enableCache()
    {
    }
    /**
     * Closes connection to database.
     */
    public function __destruct()
    {
    }
    /**
     * Execute a query and get result resource.
     *
     * @param string|DbQuery $sql
     *
     * @return bool|mysqli_result|PDOStatement|resource
     *
     * @throws PrestaShopDatabaseException
     */
    public function query($sql)
    {
    }
    /**
     * Executes an INSERT query.
     *
     * @param string $table Table name without prefix
     * @param array $data Data to insert as associative array. If $data is a list of arrays, multiple insert will be done
     * @param bool $null_values If we want to use NULL values instead of empty quotes
     * @param bool $use_cache
     * @param int $type Must be Db::INSERT or Db::INSERT_IGNORE or Db::REPLACE
     * @param bool $add_prefix Add or not _DB_PREFIX_ before table name
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public function insert($table, $data, $null_values = \false, $use_cache = \true, $type = \Db::INSERT, $add_prefix = \true)
    {
    }
    /**
     * Executes an UPDATE query.
     *
     * @param string $table Table name without prefix
     * @param array $data Data to insert as associative array. If $data is a list of arrays, multiple insert will be done
     * @param string $where WHERE condition
     * @param int $limit
     * @param bool $null_values If we want to use NULL values instead of empty quotes
     * @param bool $use_cache
     * @param bool $add_prefix Add or not _DB_PREFIX_ before table name
     *
     * @return bool
     */
    public function update($table, $data, $where = '', $limit = 0, $null_values = \false, $use_cache = \true, $add_prefix = \true)
    {
    }
    /**
     * Executes a DELETE query.
     *
     * @param string $table Name of the table to delete
     * @param string $where WHERE clause on query
     * @param int $limit Number max of rows to delete
     * @param bool $use_cache Use cache or not
     * @param bool $add_prefix Add or not _DB_PREFIX_ before table name
     *
     * @return bool
     */
    public function delete($table, $where = '', $limit = 0, $use_cache = \true, $add_prefix = \true)
    {
    }
    /**
     * Executes a query.
     *
     * @param string|DbQuery $sql
     * @param bool $use_cache
     *
     * @return bool
     */
    public function execute($sql, $use_cache = \true)
    {
    }
    /**
     * Executes return the result of $sql as array.
     *
     * @param string|DbQuery $sql Query to execute
     * @param bool $array Return an array instead of a result object (deprecated since 1.5.0.1, use query method instead)
     * @param bool $use_cache
     *
     * @return array|bool|mysqli_result|PDOStatement|resource|null
     *
     * @throws PrestaShopDatabaseException
     */
    public function executeS($sql, $array = \true, $use_cache = \true)
    {
    }
    /**
     * Returns an associative array containing the first row of the query
     * This function automatically adds "LIMIT 1" to the query.
     *
     * @param string|DbQuery $sql the select query (without "LIMIT 1")
     * @param bool $use_cache Find it in cache first
     *
     * @return array|bool|object|null
     */
    public function getRow($sql, $use_cache = \true)
    {
    }
    /**
     * Returns a value from the first row, first column of a SELECT query.
     *
     * @param string|DbQuery $sql
     * @param bool $use_cache
     *
     * @return string|false|null Returns false if no results
     */
    public function getValue($sql, $use_cache = \true)
    {
    }
    /**
     * Get number of rows for last result.
     *
     * @return int
     */
    public function numRows()
    {
    }
    /**
     * Executes a query.
     *
     * @param string|DbQuery $sql
     * @param bool $use_cache
     *
     * @return bool|mysqli_result|PDOStatement|resource
     *
     * @throws PrestaShopDatabaseException
     */
    protected function q($sql, $use_cache = \true)
    {
    }
    /**
     * Displays last SQL error.
     *
     * @param string|bool $sql
     *
     * @throws PrestaShopDatabaseException
     */
    public function displayError($sql = \false)
    {
    }
    /**
     * Sanitize data which will be injected into SQL query.
     *
     * @param string $string SQL data which will be injected into SQL query
     * @param bool $html_ok Does data contain HTML code ? (optional)
     * @param bool $bq_sql Escape backticks
     *
     * @return string Sanitized data
     */
    public function escape($string, $html_ok = \false, $bq_sql = \false)
    {
    }
    /**
     * Try a connection to the database.
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     * @param string $db Database name
     * @param bool $new_db_link
     * @param string|bool $engine
     * @param int $timeout
     *
     * @return int Error code or 0 if connection was successful
     */
    public static function checkConnection($server, $user, $pwd, $db, $new_db_link = \true, $engine = \null, $timeout = 5)
    {
    }
    /**
     * Try a connection to the database and set names to UTF-8.
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     *
     * @return bool
     */
    public static function checkEncoding($server, $user, $pwd)
    {
    }
    /**
     * Try a connection to the database and check if at least one table with same prefix exists.
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     * @param string $db Database name
     * @param string $prefix Tables prefix
     *
     * @return bool
     */
    public static function hasTableWithSamePrefix($server, $user, $pwd, $db, $prefix)
    {
    }
    /**
     * Tries to connect to the database and create a table (checking creation privileges).
     *
     * @param string $server
     * @param string $user
     * @param string $pwd
     * @param string $db
     * @param string $prefix
     * @param string|null $engine Table engine
     *
     * @return bool|string True, false or error
     */
    public static function checkCreatePrivilege($server, $user, $pwd, $db, $prefix, $engine = \null)
    {
    }
    /**
     * Tries to connect to the database and select content (checking select privileges).
     *
     * @param string $server
     * @param string $user
     * @param string $pwd
     * @param string $db
     * @param string $prefix
     * @param string|null $engine Table engine
     *
     * @return bool|string True, false or error
     */
    public static function checkSelectPrivilege($server, $user, $pwd, $db, $prefix, $engine = \null)
    {
    }
    /**
     * Get used link instance.
     *
     * @return PDO|mysqli|resource Resource
     */
    public function getLink()
    {
    }
}
