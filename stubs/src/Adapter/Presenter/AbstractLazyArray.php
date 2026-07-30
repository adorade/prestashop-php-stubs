<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter;

/**
 * This class is useful to provide the same behaviour than an array, but which load the result of each key on demand
 * (LazyLoading).
 *
 * Example:
 *
 * If your want to define the ['addresses'] array access in your lazyArray object, just define the public method
 * getAddresses() and add the annotation arrayAccess to it. e.g:
 *
 *     @arrayAccess
 *
 *     @return array
 *
 *     public function getAddresses()
 *
 * The method name should always be the index name converted to camelCase and prefixed with get. e.g:
 *
 * ['add_to_cart'] => getAddToCart()
 *
 * You can also add an array with already defined key to the lazyArray be calling the appendArray function.
 * e.g.: you have a $product array containing $product['id'] = 10; $product['url'] = 'foo';
 *       If you call ->appendArray($product) on the lazyArray, it will define the key ['id'] and ['url'] as well
 *       for the lazyArray.
 * Note if the key already exists as a method, it will be skip. In our example, if getUrl() is defined with the
 * annotation @arrayAccess, the $product['url'] = 'foo'; will be ignored
 */
abstract class AbstractLazyArray implements \Iterator, \ArrayAccess, \Countable, \JsonSerializable
{
    /**
     * AbstractLazyArray constructor.
     *
     * @throws ReflectionException
     */
    public function __construct()
    {
    }
    /**
     * Make the lazyArray serializable like an array.
     *
     * @return array
     *
     * @throws RuntimeException
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
    }
    /**
     * Set array key and values from $array into the LazyArray.
     *
     * @param array $array
     */
    public function appendArray($array)
    {
    }
    /**
     * @param mixed $key
     * @param \Closure $closure
     */
    public function appendClosure($key, \Closure $closure)
    {
    }
    /**
     * The number of keys defined into the lazyArray.
     *
     * @return int
     */
    public function count(): int
    {
    }
    /**
     * The properties are provided as an array. But callers checking the type of this class (is_object === true)
     * think they must use the object syntax.
     *
     * Check if the index exists inside the lazyArray.
     *
     * @param string $index
     *
     * @return bool
     */
    public function __isset($index)
    {
    }
    /**
     * The properties are provided as an array. But callers checking the type of this class (is_object === true)
     * think they must use the object syntax.
     *
     * Get the value associated with the $index from the lazyArray.
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    public function __get($index)
    {
    }
    /**
     * The properties are provided as an array. But callers checking the type of this class (is_object === true)
     * think they must use the object syntax.
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @throws RuntimeException
     */
    public function __set($name, $value)
    {
    }
    /**
     * The properties are provided as an array. But callers checking the type of this class (is_object === true)
     * think they must use the object syntax.
     *
     * @param mixed $name
     *
     * @throws RuntimeException
     */
    public function __unset($name)
    {
    }
    /**
     * Needed to ensure that any changes to this object won't bleed to other instances
     */
    public function __clone()
    {
    }
    /**
     * Get the value associated with the $index from the lazyArray.
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($index)
    {
    }
    public function clearMethodCacheResults()
    {
    }
    /**
     * Check if the index exists inside the lazyArray.
     *
     * @param mixed $index
     *
     * @return bool
     */
    public function offsetExists($index): bool
    {
    }
    /**
     * Copy the lazyArray.
     *
     * @return AbstractLazyArray
     */
    public function getArrayCopy()
    {
    }
    /**
     * Get the result associated with the current index.
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     * Go to the next result inside the lazyArray.
     */
    public function next(): void
    {
    }
    /**
     * Get the key associated with the current index.
     *
     * @return mixed|string
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * Check if we are at the end of the lazyArray.
     *
     * @return bool
     */
    public function valid(): bool
    {
    }
    /**
     * Go back to the first element of the lazyArray.
     */
    public function rewind(): void
    {
    }
    /**
     * Set the keys not present in the given $array to null.
     *
     * @param array $array
     *
     * @throws RuntimeException
     */
    public function intersectKey($array)
    {
    }
    /**
     * @param mixed $offset
     * @param mixed $value
     * @param bool $force if set, allow override of an existing method
     *
     * @throws RuntimeException
     */
    public function offsetSet($offset, $value, $force = false): void
    {
    }
    /**
     * @param mixed $offset
     * @param bool $force if set, allow unset of an existing method
     *
     * @throws RuntimeException
     */
    public function offsetUnset($offset, $force = false): void
    {
    }
}
