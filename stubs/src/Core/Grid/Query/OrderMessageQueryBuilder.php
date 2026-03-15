<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Builds search & count queries for Order message grid
 */
final class OrderMessageQueryBuilder implements \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param int $contextLanguageId
     * @param DoctrineFilterApplicatorInterface $doctrineFilterApplicator
     * @param DoctrineSearchCriteriaApplicatorInterface $doctrineSearchCriteriaApplicator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, int $contextLanguageId, \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicatorInterface $doctrineFilterApplicator, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $doctrineSearchCriteriaApplicator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
