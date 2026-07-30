<?php

namespace PrestaShop\PrestaShop\Core\Grid\Search;

/**
 * Class SearchCriteria stores search criteria for grid data.
 */
final class SearchCriteria implements \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface
{
    /**
     * @param array $filters
     * @param string|null $orderBy
     * @param string|null $orderWay
     * @param int|null $offset
     * @param int|null $limit
     */
    public function __construct(array $filters = [], $orderBy = null, $orderWay = null, $offset = null, $limit = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOrderBy()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOrderWay()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOffset()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
}
