<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Filter;

/**
 * Interface for service that applies filters for Doctrine query builder
 */
interface DoctrineFilterApplicatorInterface
{
    /**
     * @param QueryBuilder $qb
     * @param SqlFilters $filters
     * @param array $filterValues
     */
    public function apply(\Doctrine\DBAL\Query\QueryBuilder $qb, \PrestaShop\PrestaShop\Core\Grid\Query\Filter\SqlFilters $filters, array $filterValues);
}
