<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Retrieve Logs data from database.
 * This class should not be used as a Grid query builder. @see LogQueryBuilder
 */
class LogRepository implements \PrestaShop\PrestaShop\Core\Repository\RepositoryInterface, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface
{
    public function __construct(\Doctrine\DBAL\Connection $connection, $databasePrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
    }
    /**
     * Get all logs with employee name and avatar information SQL query.
     *
     * @param array $filters
     *
     * @return string the SQL query
     */
    public function findAllWithEmployeeInformationQuery($filters)
    {
    }
    /**
     * Get all logs with employee name and avatar information.
     *
     * @param array $filters
     *
     * @return array the list of logs
     */
    public function findAllWithEmployeeInformation($filters)
    {
    }
    /**
     * Get a reusable Query Builder to dump and execute SQL.
     *
     * @param array $filters
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function getAllWithEmployeeInformationQuery($filters)
    {
    }
    /**
     * Delete all logs.
     *
     * @return int the number of affected rows
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function deleteAll()
    {
    }
    /**
     * Get query that searches grid rows.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @deprecated deprecated since 1.7.8.0
     * @see LogQueryBuilder::getSearchQueryBuilder
     *
     * @return QueryBuilder
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
    /**
     * Get query that counts grid rows.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @deprecated deprecated since 1.7.8.0
     * @see LogQueryBuilder::getCountQueryBuilder
     *
     * @return QueryBuilder
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
