<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * SQL query builder.
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
