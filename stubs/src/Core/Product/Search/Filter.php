<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

class Filter
{
    /**
     * @return array an array representation of the filter
     */
    public function toArray()
    {
    }
    /**
     * @param string $label the filter label
     *
     * @return $this
     */
    public function setLabel($label)
    {
    }
    /**
     * @return string the filter label
     */
    public function getLabel()
    {
    }
    /**
     * @param string $type the filter type
     *
     * @return $this
     */
    public function setType($type)
    {
    }
    /**
     * @return string the filter type
     */
    public function getType()
    {
    }
    /**
     * @param string $name the filter property name
     * @param mixed $value the filter property value
     *
     * @return $this
     */
    public function setProperty($name, $value)
    {
    }
    /**
     * @param string $name the filter property name
     *
     * @return mixed|null
     */
    public function getProperty($name)
    {
    }
    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value)
    {
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * @param int $magnitude the filter magnitude
     *
     * @return $this
     */
    public function setMagnitude($magnitude)
    {
    }
    /**
     * @return int the filter magnitude
     */
    public function getMagnitude()
    {
    }
    /**
     * @param bool $active sets the activation of the filter
     *
     * @return $this
     */
    public function setActive($active = true)
    {
    }
    /**
     * @return bool returns true if the filter is active
     */
    public function isActive()
    {
    }
    /**
     * @param bool $displayed sets the display of the filter
     *
     * @return $this
     */
    public function setDisplayed($displayed = true)
    {
    }
    /**
     * @return bool returns true if the filter is displayed
     */
    public function isDisplayed()
    {
    }
    /**
     * @param array $nextEncodedFacets
     *
     * @return $this
     */
    public function setNextEncodedFacets($nextEncodedFacets)
    {
    }
    /**
     * @return array
     */
    public function getNextEncodedFacets()
    {
    }
}
