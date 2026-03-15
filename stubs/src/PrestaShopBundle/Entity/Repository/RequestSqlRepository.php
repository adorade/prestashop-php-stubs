<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Class RequestSqlRepository is responsible for retrieving RequestSql data from database.
 */
class RequestSqlRepository implements \PrestaShop\PrestaShop\Core\Repository\RepositoryInterface, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
    }
    /**
     * Get count of all request sql's.
     *
     * @return int Number of request sql rows
     */
    public function getCount()
    {
    }
    /**
     * Get query that searches grid rows.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @deprecated since 1.7.8.0
     * @see RequestSqlQueryBuilder::getSearchQueryBuilder()
     *
     * @return QueryBuilder
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria = null)
    {
    }
    /**
     * Get query that counts grid rows.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @deprecated since 1.7.8.0
     * @see RequestSqlQueryBuilder::getCountQueryBuilder()
     *
     * @return QueryBuilder
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria = null)
    {
    }
}
