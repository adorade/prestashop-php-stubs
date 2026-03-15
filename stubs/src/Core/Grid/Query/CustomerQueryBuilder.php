<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class CustomerQueryBuilder builds queries to fetch data for customers grid.
 */
final class CustomerQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicatorInterface $criteriaApplicator
     * @param int $contextLangId
     * @param int[] $contextShopIds
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $criteriaApplicator, $contextLangId, array $contextShopIds)
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
