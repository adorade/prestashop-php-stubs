<?php

namespace PrestaShop\PrestaShop\Core\Filter;

/**
 * This class filters associative arrays.
 *
 * Usage:
 *
 * ```php
 * $map = [
 *     'foo' => 'something',
 *     'bar' => null,
 *     'baz' => array(),
 * ];
 *
 * $filter = (new HashMapFilter())
 *     ->whitelist(
 *         ['foo', 'baz']
 *     );
 *
 * $filtered = $filter->filter();
 * // returns [ 'foo' => something, 'baz' => [] ];
 * ```
 *
 * You can also nest filters:
 *
 * ```php
 * $map = [
 *     'foo' => 'something',
 *     'bar' => null,
 *     'baz' => [true, false, 1, 0]
 * ];
 *
 * $filter = (new HashMapFilter())
 *     ->whitelist([
 *         'foo',
 *         'baz' => OnlyTruthyValuesInCollectionFilter()
 *     ]);
 *
 * $filtered = $filter->filter();
 * // returns [ 'foo' => something, 'baz' => [ true, 1 ] ];
 * ```
 */
class HashMapWhitelistFilter implements \PrestaShop\PrestaShop\Core\Filter\FilterInterface
{
    /**
     * Index of $keyToKeep => true.
     *
     * @var true[]
     */
    protected $whitelistItems = [];
    /**
     * Nested filters, indexed by $keyToKeep.
     *
     * @var FilterInterface[]
     */
    protected $filters = [];
    /**
     * Adds keys to the whitelist.
     *
     * This method accepts either:
     * - string[] an array of keys to keep
     * - FilterInterface[] an array of filters, indexed by keys to keep
     * - A mixture of the two
     *
     * @param string[]|FilterInterface[] $definition
     *
     * @return $this
     */
    public function whitelist($definition)
    {
    }
    /**
     * Removes the provided key from the whitelist.
     *
     * @param string|int $key
     *
     * @return $this
     *
     * @throws FilterException if $key is not scalar
     */
    public function removeFromWhitelist($key)
    {
    }
    /**
     * Returns the white list.
     *
     * @return true[]
     */
    public function getWhitelistItems()
    {
    }
    /**
     * Returns the nested filters, indexed by $keyToKeep.
     *
     * @return FilterInterface[]
     */
    public function getFilters()
    {
    }
    /**
     * Filters the subject.
     *
     * @param array|AbstractLazyArray $subject
     *
     * @return array The filtered subject
     *
     * @throws \RuntimeException
     */
    public function filter($subject)
    {
    }
}
