<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class DoctrineQueryBuilderInterface defines contract to retrieve Doctrine query builders needed to get grid data.
 */
interface DoctrineQueryBuilderInterface
{
    /**
     * Get query that searches grid rows.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return QueryBuilder
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria);
    /**
     * Get query that counts grid rows.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return QueryBuilder
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria);
}
