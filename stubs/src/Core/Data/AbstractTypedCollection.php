<?php

namespace PrestaShop\PrestaShop\Core\Data;

/**
 * Class AbstractTypedCollection is an abstract collection class which checks
 * that the inserted elements match the requested type.
 */
abstract class AbstractTypedCollection extends \Doctrine\Common\Collections\ArrayCollection
{
    /**
     * Define the type of the elements contained in the collection.
     * Example: for a ProductCollection you need to return Product::class
     *
     * @return string
     */
    abstract protected function getType();
    /**
     * AbstractTypedCollection constructor.
     *
     * @param array $elements
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function __construct(array $elements = [])
    {
    }
    /**
     * @param mixed $element
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function removeElement($element)
    {
    }
    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function offsetSet($offset, $value): void
    {
    }
    /**
     * @param mixed $element
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function contains($element)
    {
    }
    /**
     * @param mixed $element
     *
     * @return bool|false|int|string
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function indexOf($element)
    {
    }
    /**
     * @param mixed $key
     * @param mixed $value
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function set($key, $value)
    {
    }
    /**
     * @param mixed $element
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function add($element)
    {
    }
}
