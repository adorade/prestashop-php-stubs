<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class DoctrineSearchCriteriaApplicator applies search criteria to doctrine query builder.
 */
final class DoctrineSearchCriteriaApplicator implements \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function applyPagination(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function applySorting(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Doctrine\DBAL\Query\QueryBuilder $queryBuilder)
    {
    }
}
