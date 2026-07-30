<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * This query builder is used to get the details of a specific product in each of its associated shops.
 */
class ProductShopsQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\ProductQueryBuilder
{
    /**
     * {@inheritdoc}
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
    /**
     * We perform no filtering on the shops since the purpose is to get all the details.
     *
     * @param string $sql
     * @param string $tableAlias
     * @param int|null $shopId
     * @param int|null $filteredShopGroupId
     *
     * @return string
     */
    protected function addShopCondition(string $sql, string $tableAlias, ?int $shopId, ?int $filteredShopGroupId): string
    {
    }
    /**
     * We perform no filtering on the stock, but we need to handle the stock shared by group.
     *
     * @param int|null $sharedStockGroupId
     * @param int|null $shopId
     * @param int|null $filteredShopGroupId
     *
     * @return string
     */
    protected function getStockOnCondition(?int $sharedStockGroupId, ?int $shopId, ?int $filteredShopGroupId): string
    {
    }
}
