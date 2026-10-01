<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * @todo: copied from default product lits. need to remove unused queries.
 */
final class ProductLightQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Grid\Query\ProductQueryBuilder $productQueryBuilder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
}
