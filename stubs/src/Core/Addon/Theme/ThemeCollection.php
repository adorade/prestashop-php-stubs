<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * An ArrayCollection is a Collection implementation that wraps a regular PHP array.
 */
class ThemeCollection implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * Initializes a new AddonsCollection.
     *
     * @param array $addons
     */
    public function __construct(array $addons = [])
    {
    }
    /**
     * Creates a new instance from the specified elements.
     *
     * This method is provided for derived classes to specify how a new
     * instance should be created when constructor semantics have changed.
     *
     * @param array $addons elements
     *
     * @return static
     */
    public static function createFrom(array $addons)
    {
    }
    /**
     * Gets a native PHP array representation of the collection.
     *
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * @return ArrayIterator|Traversable
     */
    public function getIterator(): \Traversable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * Required by ArrayAccess interface.
     *
     * {@inheritdoc}
     */
    public function offsetSet($offset, $addon): void
    {
    }
    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritdoc}
     */
    public function offsetUnset($offset): void
    {
    }
    /**
     * Returns true if the key is found in the collection.
     *
     * @param mixed $key the key, can be integer or string
     *
     * @return bool
     */
    public function containsKey($key)
    {
    }
    /**
     * Returns true if the addon is found in the collection.
     *
     * @param AddonTheme $addon the addon
     *
     * @return bool
     */
    public function contains(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $addon)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function indexOf(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $addon)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getKeys()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getValues()
    {
    }
    /**
     * Add an Addon with a specified key in the collection.
     *
     * @param mixed $key the key
     * @param AddonTheme $addon the specified addon
     */
    public function set($key, \PrestaShop\PrestaShop\Core\Addon\Theme\Theme $addon)
    {
    }
    /**
     * Add an Addon in the collection.
     *
     * @param AddonTheme $addon the specified addon
     *
     * @return bool
     */
    public function add(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $addon)
    {
    }
    /**
     * Remove an addon from the collection by key.
     *
     * @param int|string $key
     *
     * @return bool|null true if the addon has been found and removed
     */
    public function removeByKey($key)
    {
    }
    /**
     * Remove an addon from the collection by key.
     *
     * @param AddonTheme $addon the addon to be removed
     *
     * @return bool true if the addon has been found and removed
     */
    public function remove(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $addon)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
    }
    /**
     * Gets the sum of addons of the collection.
     *
     * @return int
     */
    public function count(): int
    {
    }
}
