<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

/**
 * We call a facet a set of filters combined with logical operators.
 */
class Facet
{
    /**
     * @return array an array representation of the facet
     */
    public function toArray()
    {
    }
    /**
     * @param string $label the facet label
     *
     * @return $this
     */
    public function setLabel($label)
    {
    }
    /**
     * @return string the facet label
     */
    public function getLabel()
    {
    }
    /**
     * @param string $type the facet type
     *
     * @return $this
     */
    public function setType($type)
    {
    }
    /**
     * @return string the facet type
     */
    public function getType()
    {
    }
    /**
     * @param string $name the facet property name
     * @param mixed $value the facet property value
     *
     * @return $this
     */
    public function setProperty($name, $value)
    {
    }
    /**
     * @param string $name the facet property name
     *
     * @return mixed|null
     */
    public function getProperty($name)
    {
    }
    /**
     * @param Filter $filter the facet filter
     *
     * @return $this
     */
    public function addFilter(\PrestaShop\PrestaShop\Core\Product\Search\Filter $filter)
    {
    }
    /**
     * @return array the list of facet filters
     */
    public function getFilters()
    {
    }
    /**
     * @param bool $isAllowed allows/disallows the multiple selection
     *
     * @return $this
     */
    public function setMultipleSelectionAllowed($isAllowed = true)
    {
    }
    /**
     * @return bool returns true if multiple selection is allowed
     */
    public function isMultipleSelectionAllowed()
    {
    }
    /**
     * @param bool $displayed sets the display of the facet
     *
     * @return $this
     */
    public function setDisplayed($displayed = true)
    {
    }
    /**
     * @return bool returns true if the facet is displayed
     */
    public function isDisplayed()
    {
    }
    /**
     * @param string $widgetType sets the widget type of the facet
     *
     * @return $this
     */
    public function setWidgetType($widgetType)
    {
    }
    /**
     * @return string returns the facet widget type
     */
    public function getWidgetType()
    {
    }
}
