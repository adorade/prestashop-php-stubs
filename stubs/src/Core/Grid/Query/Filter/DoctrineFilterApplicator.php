<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Filter;

final class DoctrineFilterApplicator implements \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function apply(\Doctrine\DBAL\Query\QueryBuilder $qb, \PrestaShop\PrestaShop\Core\Grid\Query\Filter\SqlFilters $filters, array $filterValues)
    {
    }
}
