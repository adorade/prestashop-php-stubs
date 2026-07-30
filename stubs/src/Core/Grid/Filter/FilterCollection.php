<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Class FilterCollection manages filters collection for grid.
 */
final class FilterCollection implements \PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface
{
    /**
     * {@inheritdoc}
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Filter\FilterInterface $filter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function remove($filterName)
    {
    }
    /**
     * @param string $filterName
     *
     * @return FilterInterface|null return null if no filter with given filter name
     */
    public function get($filterName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function all()
    {
    }
}
