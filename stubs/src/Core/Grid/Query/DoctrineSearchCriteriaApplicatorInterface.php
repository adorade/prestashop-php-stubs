<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Interface DoctrineSearchCriteriaApplicatorInterface contract for doctrine query builder applicator.
 */
interface DoctrineSearchCriteriaApplicatorInterface
{
    /**
     * Apply pagination on query builder.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @param QueryBuilder $queryBuilder
     *
     * @return self
     */
    public function applyPagination(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder);
    /**
     * Apply sorting on query builder.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @param QueryBuilder $queryBuilder
     *
     * @return self
     */
    public function applySorting(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder);
}
