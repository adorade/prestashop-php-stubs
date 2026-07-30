<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Interface FilterCollectionInterface defines contract for grid filters.
 */
interface FilterCollectionInterface
{
    /**
     * Add filter to collection.
     *
     * @param FilterInterface $filter
     *
     * @return self
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Filter\FilterInterface $filter);
    /**
     * Remove filter from collection.
     *
     * @param string $filterName
     *
     * @return self
     */
    public function remove($filterName);
    /**
     * Get all filters.
     *
     * @return FilterInterface[]
     */
    public function all();
}
