<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class CurrencyQueryBuilder builds search & count queries for currencies grid.
 */
final class CurrencyQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator
     * @param array $contextShopIds
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator, array $contextShopIds, $contextLangId)
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
