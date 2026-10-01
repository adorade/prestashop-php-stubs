<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Api;

/**
 * Class HookQueryBuilder builds search & count queries for hook grid.
 */
final class HookQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator $searchCriteriaApplicator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, private readonly \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator $searchCriteriaApplicator)
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
