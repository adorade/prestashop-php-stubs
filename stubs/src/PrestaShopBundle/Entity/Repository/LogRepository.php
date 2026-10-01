<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Retrieve Logs data from database.
 * This class should not be used as a Grid query builder. @see LogQueryBuilder
 */
class LogRepository implements \PrestaShop\PrestaShop\Core\Repository\RepositoryInterface
{
    public function __construct(\Doctrine\DBAL\Connection $connection, $databasePrefix)
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
     * @throws \Doctrine\DBAL\Exception
     */
    public function deleteAll()
    {
    }
}
