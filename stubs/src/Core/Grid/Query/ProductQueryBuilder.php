<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Defines all required sql statements to render products list.
 */
class ProductQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator, int $contextLanguageId, \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicatorInterface $filterApplicator, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository)
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
    protected function addShopCondition(string $sql, string $tableAlias, ?int $shopId, ?int $filteredShopGroupId): string
    {
    }
    protected function getStockOnCondition(?int $sharedStockGroupId, ?int $shopId, ?int $filteredShopGroupId): string
    {
    }
}
