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
 * SQL query builder.
 *
 * @since 1.5.0.1
 */
class DbQueryCore
{
    /**
     * List of data to build the query.
     *
     * @var array
     */
    protected $query = ['type' => 'SELECT', 'select' => [], 'from' => [], 'join' => [], 'where' => [], 'group' => [], 'having' => [], 'order' => [], 'limit' => ['offset' => 0, 'limit' => 0]];
    /**
     * Sets type of the query.
     *
     * @param string $type SELECT|DELETE
     *
     * @return $this
     */
    public function type($type)
    {
    }
    /**
     * Adds fields to SELECT clause.
     *
     * @param string $fields List of fields to concat to other fields
     *
     * @return $this
     */
    public function select($fields)
    {
    }
    /**
     * Sets table for FROM clause.
     *
     * @param string|DbQuery $table Table name
     * @param string|null $alias Table alias
     *
     * @return $this
     */
    public function from($table, $alias = \null)
    {
    }
    /**
     * Adds JOIN clause
     * E.g. $this->join('RIGHT JOIN '._DB_PREFIX_.'product p ON ...');.
     *
     * @param string $join Complete string
     *
     * @return $this
     */
    public function join($join)
    {
    }
    /**
     * Adds a LEFT JOIN clause.
     *
     * @param string $table Table name (without prefix)
     * @param string|null $alias Table alias
     * @param string|null $on ON clause
     *
     * @return $this
     */
    public function leftJoin($table, $alias = \null, $on = \null)
    {
    }
    /**
     * Adds an INNER JOIN clause
     * E.g. $this->innerJoin('product p ON ...').
     *
     * @param string $table Table name (without prefix)
     * @param string|null $alias Table alias
     * @param string|null $on ON clause
     *
     * @return $this
     */
    public function innerJoin($table, $alias = \null, $on = \null)
    {
    }
    /**
     * Adds a LEFT OUTER JOIN clause.
     *
     * @param string $table Table name (without prefix)
     * @param string|null $alias Table alias
     * @param string|null $on ON clause
     *
     * @return $this
     */
    public function leftOuterJoin($table, $alias = \null, $on = \null)
    {
    }
    /**
     * Adds a NATURAL JOIN clause.
     *
     * @param string $table Table name (without prefix)
     * @param string|null $alias Table alias
     *
     * @return $this
     */
    public function naturalJoin($table, $alias = \null)
    {
    }
    /**
     * Adds a RIGHT JOIN clause.
     *
     * @param string $table Table name (without prefix)
     * @param string|null $alias Table alias
     * @param string|null $on ON clause
     *
     * @return $this
     */
    public function rightJoin($table, $alias = \null, $on = \null)
    {
    }
    /**
     * Adds a restriction in WHERE clause (each restriction will be separated by AND statement).
     *
     * @param string $restriction
     *
     * @return $this
     */
    public function where($restriction)
    {
    }
    /**
     * Adds a restriction in HAVING clause (each restriction will be separated by AND statement).
     *
     * @param string $restriction
     *
     * @return $this
     */
    public function having($restriction)
    {
    }
    /**
     * Adds an ORDER BY restriction.
     *
     * @param string $fields List of fields to sort. E.g. $this->order('myField, b.mySecondField DESC')
     *
     * @return $this
     */
    public function orderBy($fields)
    {
    }
    /**
     * Adds a GROUP BY restriction.
     *
     * @param string $fields List of fields to group. E.g. $this->group('myField1, myField2')
     *
     * @return $this
     */
    public function groupBy($fields)
    {
    }
    /**
     * Sets query offset and limit.
     *
     * @param int $limit
     * @param int $offset
     *
     * @return $this
     */
    public function limit($limit, $offset = 0)
    {
    }
    /**
     * Generates query and return SQL string.
     *
     * @return string
     *
     * @throws PrestaShopException
     */
    public function build()
    {
    }
    /**
     * Converts object to string.
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Get query.
     *
     * @return array
     */
    public function getQuery(): array
    {
    }
}
