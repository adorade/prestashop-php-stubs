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
 * Create a collection of ObjectModel objects.
 *
 * @since 1.5.0
 */
class PrestaShopCollectionCore implements \Iterator, \ArrayAccess, \Countable
{
    public const LEFT_JOIN = 1;
    public const INNER_JOIN = 2;
    public const LEFT_OUTER_JOIN = 3;
    /**
     * @var string Object class name
     */
    protected $classname;
    /**
     * @var int
     */
    protected $id_lang;
    /**
     * @var array Object definition
     */
    protected $definition = [];
    /**
     * @var DbQuery
     */
    protected $query;
    /**
     * @var array Collection of objects in an array
     */
    protected $results = [];
    /**
     * @var bool Is current collection already hydrated
     */
    protected $is_hydrated = \false;
    /**
     * @var int Collection iterator
     */
    protected $iterator = 0;
    /**
     * @var int Total of elements for iteration
     */
    protected $total;
    /**
     * @var int Page number
     */
    protected $page_number = 0;
    /**
     * @var int Size of a page
     */
    protected $page_size = 0;
    protected $fields = [];
    protected $alias = [];
    protected $alias_iterator = 0;
    protected $join_list = [];
    protected $association_definition = [];
    public const LANG_ALIAS = 'l';
    /**
     * @param string $classname
     * @param int $id_lang
     */
    public function __construct($classname, $id_lang = \null)
    {
    }
    /**
     * Join current entity to an associated entity.
     *
     * @param string $association Association name
     * @param string $on
     * @param int $type
     *
     * @return $this
     */
    public function join($association, $on = '', $type = \null)
    {
    }
    /**
     * Add WHERE restriction on query.
     *
     * @param string $field Field name
     * @param string $operator List of operators : =, !=, <>, <, <=, >, >=, like, notlike, regexp, notregexp
     * @param mixed $value
     * @param string $method where|having
     *
     * @return $this
     */
    public function where($field, $operator, $value, $method = 'where')
    {
    }
    /**
     * Add WHERE restriction on query using real SQL syntax.
     *
     * @param string $sql
     *
     * @return $this
     */
    public function sqlWhere($sql)
    {
    }
    /**
     * Add HAVING restriction on query.
     *
     * @param string $field Field name
     * @param string $operator List of operators : =, !=, <>, <, <=, >, >=, like, notlike, regexp, notregexp
     * @param mixed $value
     *
     * @return $this
     */
    public function having($field, $operator, $value)
    {
    }
    /**
     * Add HAVING restriction on query using real SQL syntax.
     *
     * @param string $sql
     *
     * @return $this
     */
    public function sqlHaving($sql)
    {
    }
    /**
     * Add ORDER BY restriction on query.
     *
     * @param string $field Field name
     * @param string $order asc|desc
     *
     * @return $this
     */
    public function orderBy($field, $order = 'asc')
    {
    }
    /**
     * Add ORDER BY restriction on query using real SQL syntax.
     *
     * @param string $sql
     *
     * @return $this
     */
    public function sqlOrderBy($sql)
    {
    }
    /**
     * Add GROUP BY restriction on query.
     *
     * @param string $field Field name
     *
     * @return $this
     */
    public function groupBy($field)
    {
    }
    /**
     * Add GROUP BY restriction on query using real SQL syntax.
     *
     * @param string $sql
     *
     * @return $this
     */
    public function sqlGroupBy($sql)
    {
    }
    /**
     * Launch sql query to create collection of objects.
     *
     * @param bool $display_query If true, query will be displayed (for debug purpose)
     *
     * @return $this
     */
    public function getAll($display_query = \false)
    {
    }
    /**
     * Retrieve the first result.
     *
     * @return ObjectModel|bool
     */
    public function getFirst()
    {
    }
    /**
     * Retrieve the last result.
     *
     * @return ObjectModel|false
     */
    public function getLast()
    {
    }
    /**
     * Get results array.
     *
     * @return array
     */
    public function getResults()
    {
    }
    /**
     * This method is called when a foreach begin.
     *
     * @see Iterator::rewind()
     */
    public function rewind(): void
    {
    }
    /**
     * Get current result.
     *
     * @see Iterator::current()
     *
     * @return ObjectModel
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     * Check if there is a current result.
     *
     * @see Iterator::valid()
     *
     * @return bool
     */
    public function valid(): bool
    {
    }
    /**
     * Get current result index.
     *
     * @see Iterator::key()
     *
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * Go to next result.
     *
     * @see Iterator::next()
     */
    public function next(): void
    {
    }
    /**
     * Get total of results.
     *
     * @see Countable::count()
     *
     * @return int
     */
    public function count(): int
    {
    }
    /**
     * Check if a result exist.
     *
     * @see ArrayAccess::offsetExists()
     *
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }
    /**
     * Get a result by offset.
     *
     * @see ArrayAccess::offsetGet()
     *
     * @param mixed $offset
     *
     * @return ObjectModel
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * Add an element in the collection.
     *
     * @see ArrayAccess::offsetSet()
     *
     * @param mixed $offset
     * @param ObjectModel $value
     */
    public function offsetSet($offset, $value): void
    {
    }
    /**
     * Delete an element from the collection.
     *
     * @see ArrayAccess::offsetUnset()
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset): void
    {
    }
    /**
     * Get definition of an association.
     *
     * @param string $association
     *
     * @return array
     */
    protected function getDefinition($association)
    {
    }
    /**
     * Parse all fields with {field} syntax in a string.
     *
     * @param string $str
     *
     * @return string
     */
    protected function parseFields($str)
    {
    }
    /**
     * Replace a field with its SQL version (E.g. manufacturer.name with a2.name).
     *
     * @param string $field Field name
     *
     * @return string
     */
    protected function parseField($field)
    {
    }
    /**
     * Format a value with the type of the given field.
     *
     * @param mixed $value
     * @param string $field Field name
     *
     * @return mixed
     */
    protected function formatValue($value, $field)
    {
    }
    /**
     * Obtain some information on a field (alias, name, type, etc.).
     *
     * @param string $field Field name
     *
     * @return array
     */
    protected function getFieldInfo($field)
    {
    }
    /**
     * Set the page number.
     *
     * @param int $page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
    }
    /**
     * Set the nuber of item per page.
     *
     * @param int $page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
    }
    /**
     * Generate uniq alias from association name.
     *
     * @param string $association Use empty association for alias on current table
     *
     * @return string
     */
    protected function generateAlias($association = '')
    {
    }
}
