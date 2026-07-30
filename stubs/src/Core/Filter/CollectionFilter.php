<?php

namespace PrestaShop\PrestaShop\Core\Filter;

/**
 * Iterates over a collection, filtering each element using a queue of filters.
 */
class CollectionFilter implements \PrestaShop\PrestaShop\Core\Filter\FilterInterface
{
    /**
     * Sets process queue.
     *
     * @param FilterInterface[] $filters
     *
     * @return $this
     *
     * @throws FilterException
     */
    public function queue(array $filters)
    {
    }
    /**
     * Returns the current queue.
     *
     * @return FilterInterface[]
     */
    public function getQueue()
    {
    }
    /**
     * Filters the provided subject.
     *
     * @param array $subject Collection to filter
     *
     * @return array
     *
     * @throws FilterException
     */
    public function filter($subject)
    {
    }
}
