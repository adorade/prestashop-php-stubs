<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class WebserviceKeyQueryBuilder is responsible for providing data for webservice accounts list.
 */
final class WebserviceKeyQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * WebserviceKeyQueryBuilder constructor.
     *
     * @param Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator
     * @param array $contextShopIds
     * @param DoctrineFilterApplicatorInterface $doctrineFilterApplicator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator, array $contextShopIds, \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicatorInterface $doctrineFilterApplicator)
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
