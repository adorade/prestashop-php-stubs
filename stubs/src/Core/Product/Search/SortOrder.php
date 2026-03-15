<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

/**
 * This class define in which order the list of products will be sorted.
 */
class SortOrder
{
    /**
     * SortOrder constructor.
     *
     * @param string $entity the SortOrder entity
     * @param string $field the SortOrder field
     * @param string $direction the SortOrder direction
     *
     * @throws InvalidSortOrderDirectionException
     */
    public function __construct($entity, $field, $direction = 'asc')
    {
    }
    /**
     * Will returns a new Sort Order with random direction.
     *
     * @return SortOrder
     *
     * @throws InvalidSortOrderDirectionException
     */
    public static function random()
    {
    }
    /**
     * @return bool if true, the Sort Order direction is random
     */
    public function isRandom()
    {
    }
    /**
     * @return array the array representation of a Sort Order
     */
    public function toArray()
    {
    }
    /**
     * @return string the string representation of a Sort Order
     */
    public function toString()
    {
    }
    /**
     * Creates a new Sort Order from string of this kind: {entity}.{field}.{direction}.
     *
     * @param string $sortOrderConfiguration the Sort Order configuration string
     *
     * @return SortOrder
     *
     * @throws InvalidSortOrderDirectionException
     */
    public static function newFromString($sortOrderConfiguration)
    {
    }
    /**
     * @param string $label the Sort Order label
     *
     * @return $this
     */
    public function setLabel($label)
    {
    }
    /**
     * @return string the Sort Order label
     */
    public function getLabel()
    {
    }
    /**
     * @param string $entity the Sort Order entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
    }
    /**
     * @return string the Sort Order entity
     */
    public function getEntity()
    {
    }
    /**
     * @param string $field the Sort Order field
     *
     * @return $this
     */
    public function setField($field)
    {
    }
    /**
     * @return string the Sort Order field
     */
    public function getField()
    {
    }
    /**
     * @param string $direction
     *
     * @return string
     *
     * @throws InvalidSortOrderDirectionException
     */
    public function setDirection($direction)
    {
    }
    /**
     * @return string the Sort Order direction
     */
    public function getDirection()
    {
    }
    /**
     * @param bool $prefix if true, relies on legacy prefix
     *
     * @return string
     */
    public function toLegacyOrderBy($prefix = false)
    {
    }
    /**
     * @return string the legacy order way
     */
    public function toLegacyOrderWay()
    {
    }
}
