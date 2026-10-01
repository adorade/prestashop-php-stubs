<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

class AliasQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
}
