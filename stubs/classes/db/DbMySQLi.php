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
 * Class DbMySQLiCore.
 *
 * @since 1.5.0,1
 */
class DbMySQLiCore extends \Db
{
    /** @var mysqli */
    protected $link;
    /** @var mysqli_result */
    protected $result;
    /**
     * Tries to connect to the database.
     *
     * @see DbCore::connect()
     *
     * @return mysqli
     *
     * @throws PrestaShopDatabaseException
     */
    public function connect()
    {
    }
    /**
     * Tries to connect and create a new database.
     *
     * @param string $host
     * @param string|null $user
     * @param string|null $password
     * @param string|null $database
     * @param bool $dropit if true, drops the created database
     *
     * @return bool|mysqli_result
     */
    public static function createDatabase($host, $user = \null, $password = \null, $database = \null, $dropit = \false)
    {
    }
    /**
     * Destroys the database connection link.
     *
     * @see DbCore::disconnect()
     */
    public function disconnect()
    {
    }
    /**
     * Executes an SQL statement, returning a result set as a mysqli_result object or true/false.
     *
     * @see DbCore::_query()
     *
     * @param string $sql
     *
     * @return bool|mysqli_result
     */
    protected function _query($sql)
    {
    }
    /**
     * Returns the next row from the result set.
     *
     * @see DbCore::nextRow()
     *
     * @param bool|mysqli_result $result
     *
     * @return array|bool
     */
    public function nextRow($result = \false)
    {
    }
    /**
     * Returns all rows from the result set.
     *
     * @see DbCore::getAll()
     *
     * @param bool|mysqli_result $result
     *
     * @return array|false
     */
    protected function getAll($result = \false)
    {
    }
    /**
     * Returns row count from the result set.
     *
     * @see DbCore::_numRows()
     *
     * @param bool|mysqli_result $result
     *
     * @return int
     */
    protected function _numRows($result)
    {
    }
    /**
     * Returns ID of the last inserted row.
     *
     * @see DbCore::Insert_ID()
     *
     * @return string|int
     */
    public function Insert_ID()
    {
    }
    /**
     * Return the number of rows affected by the last SQL query.
     *
     * @see DbCore::Affected_Rows()
     *
     * @return int
     */
    public function Affected_Rows()
    {
    }
    /**
     * Returns error message.
     *
     * @see DbCore::getMsgError()
     *
     * @param bool $query
     *
     * @return string
     */
    public function getMsgError($query = \false)
    {
    }
    /**
     * Returns error code.
     *
     * @see DbCore::getNumberError()
     *
     * @return int
     */
    public function getNumberError()
    {
    }
    /**
     * Returns database server version.
     *
     * @see DbCore::getVersion()
     *
     * @return string
     */
    public function getVersion()
    {
    }
    /**
     * Escapes illegal characters in a string.
     *
     * @see DbCore::_escape()
     *
     * @param string $str
     *
     * @return string
     */
    public function _escape($str)
    {
    }
    /**
     * Switches to a different database.
     *
     * @see DbCore::set_db()
     *
     * @param string $db_name
     *
     * @return bool
     */
    public function set_db($db_name)
    {
    }
    /**
     * Try a connection to the database and check if at least one table with same prefix exists.
     *
     * @see Db::hasTableWithSamePrefix()
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
     * Try a connection to the database.
     *
     * @see Db::checkConnection()
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
    public static function tryToConnect($server, $user, $pwd, $db, $new_db_link = \true, $engine = \null, $timeout = 5)
    {
    }
    /**
     * Selects best table engine.
     *
     * @return string
     */
    public function getBestEngine()
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
     * Try a connection to the database and set names to UTF-8.
     *
     * @see Db::checkEncoding()
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     *
     * @return bool
     */
    public static function tryUTF8($server, $user, $pwd)
    {
    }
}
