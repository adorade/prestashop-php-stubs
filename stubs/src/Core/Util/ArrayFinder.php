<?php

namespace PrestaShop\PrestaShop\Core\Util;

/**
 * ArrayFinder allows to modify an array content using selectors such as $arrayFinder->get('property_a.property_3.4');
 *
 * This class replaces https://github.com/Shudrum/ArrayFinder/blob/master/ArrayFinder.php that
 * was used in previous PrestaShop versions.
 *
 * Credits to Julien Martin https://github.com/Shudrum for the original class
 */
class ArrayFinder implements \ArrayAccess, \Countable
{
    /**
     * @param array $content the array to be searched and manager by ArrayFinder
     */
    public function __construct(array $content = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function count(): int
    {
    }
    /**
     * @param string|null $path selector to find the desired value. if empty, will return full array
     * @param mixed|null $default default value to be returned if selector matches nothing
     *
     * @return mixed|null
     *
     * Examples of use:
     * $arrayFinder->get('a');
     * $arrayFinder->get('a.e.9');
     * $arrayFinder->get('4');
     */
    public function get(string $path = null, $default = null)
    {
    }
    /**
     * @param string $path selector for the value to be set
     * @param mixed $value input value to be set inside array
     *
     * @return self
     *
     * Examples of use:
     * $arrayFinder->set('a', $aNewValue);
     * $arrayFinder->set('a.e.9', $aNewValue);
     * $arrayFinder->set('4', $aNewValue);
     */
    public function set(string $path, $value): self
    {
    }
    /**
     * {@inheritdoc}
     *
     * Example of use: isset($this->arrayFinder['a']
     */
    public function offsetExists($offset): bool
    {
    }
    /**
     * {@inheritdoc}
     *
     * Examples of use:
     * $arrayFinder[4];
     * $arrayFinder['a'];
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Example of use: $this->arrayFinder['a'] = $value;
     */
    public function offsetSet($offset, $value): void
    {
    }
    /**
     * {@inheritdoc}
     *
     * Example of use: unset($this->arrayFinder['a']);
     */
    public function offsetUnset($offset): void
    {
    }
}
