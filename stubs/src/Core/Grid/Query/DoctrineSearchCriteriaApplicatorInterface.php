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
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     * @param \Doctrine\DBAL\Query\QueryBuilder $queryBuilder
     *
     * @return self
     */
    public function applyPagination(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder);
    /**
     * Apply sorting on query builder.
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     * @param \Doctrine\DBAL\Query\QueryBuilder $queryBuilder
     *
     * @return self
     */
    public function applySorting(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder);
    /**
     * Apply deterministic sorting (stable order) on query builder.
     * Useful when the requested sorting may lead to non-deterministic results
     * (e.g. same values across many rows), so it appends a tie-breaker.
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     * @param \Doctrine\DBAL\Query\QueryBuilder $queryBuilder
     * @param string $alias The root alias used in the query (e.g. "a")
     * @param string $primaryKey The primary key field name (e.g. "id")
     *
     * @return self
     */
    public function applyDeterministicSorting(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder, string $alias, string $primaryKey);
}
