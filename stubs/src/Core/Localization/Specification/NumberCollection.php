<?php

namespace PrestaShop\PrestaShop\Core\Localization\Specification;

/**
 * Number specifications collection
 * Contains a list of Number specification items (all implementing NumberInterface).
 */
class NumberCollection implements \IteratorAggregate, \Countable
{
    /**
     * The Number specification items.
     *
     * @var \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface[]
     */
    protected $numberSpecifications = [];
    /**
     * Gets the current NumberCollection as an Iterator that includes all Number specification items.
     *
     * It implements \IteratorAggregate.
     *
     * @return \ArrayIterator|\PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface[]
     *                                                      An ArrayIterator object for iterating over Number specification items
     */
    public function getIterator(): \Traversable
    {
    }
    /**
     * Gets the number of Number specification items in this collection.
     *
     * @return int
     *             The number of Number specification items
     */
    public function count(): int
    {
    }
    /**
     * Adds a Number specification item at the end of the collection.
     *
     * @param int|string $index
     *                          The item index
     * @param \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface $numberSpecification
     *                                                          The Number specification item to add
     *
     * @return NumberCollection
     *                          Fluent interface
     */
    public function add($index, \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface $numberSpecification)
    {
    }
    /**
     * Returns all Number specification items in this collection.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface[]
     *                                        An array of Number specification items
     */
    public function all()
    {
    }
    /**
     * Gets a Number specification item by index.
     *
     * @param int|string $index
     *                          The Number specification item index into this collection
     *                          (@see NumberCollection::add())
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface|null
     *                                           A Number specification instance or null when not found
     */
    public function get($index)
    {
    }
    /**
     * Removes a Number specification item or an array of Number specification items by index from the collection.
     *
     * @param int|string|int[]|string[]|array $index
     *                                               The Number specification item index or an array of Number specification item indexes
     *
     * @return NumberCollection
     *                          Fluent interface
     */
    public function remove($index)
    {
    }
    /**
     * Clear the collection, removing all contained Number specification items.
     *
     * @return NumberCollection
     *                          Fluent interface
     */
    public function clear()
    {
    }
}
