<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * This allows to store a filter parameter in a hidden input which can be prefilled
 * to provide some context or updated dynamically via js for filter component outside
 * the grid headers filters.
 */
class HiddenFilter implements \PrestaShop\PrestaShop\Core\Grid\Filter\FilterInterface
{
    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setTypeOptions(array $filterTypeOptions)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTypeOptions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setAssociatedColumn($columnId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAssociatedColumn()
    {
    }
}
