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
 * Class RequestSqlCore.
 */
class RequestSqlCore extends \ObjectModel
{
    public $name;
    public $sql;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'request_sql', 'primary' => 'id_request_sql', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => \true, 'size' => 200], 'sql' => ['type' => self::TYPE_SQL, 'validate' => 'isString', 'required' => \true, 'size' => 4194303]]];
    /** @var array : List of params to tested */
    public $tested = ['required' => ['SELECT', 'FROM'], 'option' => ['WHERE', 'ORDER', 'LIMIT', 'HAVING', 'GROUP', 'UNION'], 'operator' => ['AND', '&&', 'BETWEEN', 'AND', 'BINARY', '&', '~', '|', '^', 'CASE', 'WHEN', 'END', 'DIV', '/', '<=>', '=', '>=', '>', 'IS', 'NOT', 'NULL', '<<', '<=', '<', 'LIKE', '-', '%', '!=', '<>', 'REGEXP', '!', '||', 'OR', '+', '>>', 'RLIKE', 'SOUNDS', '*', '-', 'XOR', 'IN'], 'function' => ['AVG', 'SUM', 'COUNT', 'MIN', 'MAX', 'STDDEV', 'STDDEV_SAMP', 'STDDEV_POP', 'VARIANCE', 'VAR_SAMP', 'VAR_POP', 'GROUP_CONCAT', 'BIT_AND', 'BIT_OR', 'BIT_XOR'], 'unauthorized' => ['DELETE', 'ALTER', 'INSERT', 'REPLACE', 'CREATE', 'TRUNCATE', 'OPTIMIZE', 'GRANT', 'REVOKE', 'SHOW', 'HANDLER', 'LOAD', 'LOAD_FILE', 'ROLLBACK', 'SAVEPOINT', 'UNLOCK', 'INSTALL', 'UNINSTALL', 'ANALZYE', 'BACKUP', 'CHECK', 'CHECKSUM', 'REPAIR', 'RESTORE', 'CACHE', 'DESCRIBE', 'EXPLAIN', 'USE', 'HELP', 'SET', 'DUPLICATE', 'VALUES', 'INTO', 'RENAME', 'CALL', 'PROCEDURE', 'FUNCTION', 'DATABASE', 'SERVER', 'LOGFILE', 'DEFINER', 'RETURNS', 'EVENT', 'TABLESPACE', 'VIEW', 'TRIGGER', 'DATA', 'DO', 'PASSWORD', 'USER', 'PLUGIN', 'FLUSH', 'KILL', 'RESET', 'START', 'STOP', 'PURGE', 'EXECUTE', 'PREPARE', 'DEALLOCATE', 'LOCK', 'USING', 'DROP', 'FOR', 'UPDATE', 'BEGIN', 'BY', 'ALL', 'SHARE', 'MODE', 'TO', 'KEY', 'DISTINCTROW', 'DISTINCT', 'HIGH_PRIORITY', 'LOW_PRIORITY', 'DELAYED', 'IGNORE', 'FORCE', 'STRAIGHT_JOIN', 'SQL_SMALL_RESULT', 'SQL_BIG_RESULT', 'QUICK', 'SQL_BUFFER_RESULT', 'SQL_CACHE', 'SQL_NO_CACHE', 'SQL_CALC_FOUND_ROWS', 'WITH', 'OUTFILE', 'DUMPFILE']];
    public $attributes = ['passwd' => '*******************', 'secure_key' => '*******************'];
    /** @var array : list of errors */
    public $error_sql = [];
    /**
     * Get list of request SQL.
     *
     * @return array|bool
     */
    public static function getRequestSql()
    {
    }
    /**
     * Get list of request SQL by id request.
     *
     * @param int $id
     *
     * @return array
     */
    public static function getRequestSqlById($id)
    {
    }
    /**
     * Call the parserSQL() method in Tools class
     * Cut the request in table for check it.
     *
     * @param string $sql
     *
     * @return array|bool
     */
    public function parsingSql($sql)
    {
    }
    /**
     * Check if the parsing of the SQL request is good or not.
     *
     * @param array $tab
     * @param bool $in
     * @param string $sql
     *
     * @return bool
     */
    public function validateParser($tab, $in, $sql)
    {
    }
    /**
     * Cut the request for check each cutting.
     *
     * @param array<string, array> $tab
     * @param bool $in
     * @param string $sql
     *
     * @return bool
     */
    public function validateSql($tab, $in, $sql)
    {
    }
    /**
     * Get list of all tables.
     *
     * @return array
     */
    public function getTables()
    {
    }
    /**
     * Get list of all attributes by an table.
     *
     * @param string $table
     *
     * @return array
     */
    public function getAttributesByTable($table)
    {
    }
    /**
     * Cut an join sentence.
     *
     * @param array $attrs
     * @param array $from
     *
     * @return array
     */
    public function cutJoin($attrs, $from)
    {
    }
    /**
     * Cut an attribute with or without the alias.
     *
     * @param string $attr
     * @param array $from
     *
     * @return array|bool
     */
    public function cutAttribute($attr, $from)
    {
    }
    /**
     * Get name of table by alias.
     *
     * @param string|false $alias
     * @param array $tables
     *
     * @return array|bool
     */
    public function returnNameTable($alias, $tables, $attr = \null)
    {
    }
    /**
     * Check if an attributes exists in a table.
     *
     * @param string $attr
     * @param array $table
     *
     * @return bool
     */
    public function attributExistInTable($attr, $table)
    {
    }
    /**
     * Check if all required sentence existing.
     *
     * @param array $tab
     *
     * @return bool
     */
    public function testedRequired($tab)
    {
    }
    /**
     * Check if an unauthorized existing in an array.
     *
     * @param array $tab
     *
     * @return bool
     */
    public function testedUnauthorized($tab)
    {
    }
    /**
     * Check a "FROM" sentence.
     *
     * @param array<int, array<string, mixed>> $from
     *
     * @return bool
     */
    public function checkedFrom($from)
    {
    }
    /**
     * Check a "SELECT" sentence.
     *
     * @param array<int, array<string, mixed>> $select
     * @param array $from
     * @param bool $in
     *
     * @return bool
     */
    public function checkedSelect($select, $from, $in = \false)
    {
    }
    /**
     * Check a "WHERE" sentence.
     *
     * @param array<int, array<string, mixed>> $where
     * @param array $from
     * @param string $sql
     *
     * @return bool
     */
    public function checkedWhere($where, $from, $sql)
    {
    }
    /**
     * Check a "HAVING" sentence.
     *
     * @param array<int, array<string, mixed>> $having
     * @param array $from
     *
     * @return bool
     */
    public function checkedHaving($having, $from)
    {
    }
    /**
     * Check a "ORDER" sentence.
     *
     * @param array $order
     * @param array $from
     *
     * @return bool
     */
    public function checkedOrder($order, $from)
    {
    }
    /**
     * Check a "GROUP BY" sentence.
     *
     * @param array $group
     * @param array $from
     *
     * @return bool
     */
    public function checkedGroupBy($group, $from)
    {
    }
    /**
     * Check a "LIMIT" sentence.
     *
     * @param array $limit
     *
     * @return bool
     */
    public function checkedLimit($limit)
    {
    }
}
