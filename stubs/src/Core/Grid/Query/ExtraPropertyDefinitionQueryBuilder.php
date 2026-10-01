<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Builds search and count queries for the extra property definition grid.
 *
 * Queries the extra_property_definition registry table with text (LIKE) filters
 * on entity_name, module_name, and property_name, and exact-match filters on
 * type and scope.
 *
 * Rows are additionally restricted to the definitions AVAILABLE in the current shop
 * context (single shop: available on that shop; shop group: on at least one of its
 * shops; all shops: everything). The SQL mirrors the PHP availability rules of
 * ExtraPropertyDefinition::isAvailableForShops() — keep both in lockstep.
 */
final class ExtraPropertyDefinitionQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator
     * @param \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface $shopListResolver
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, protected readonly \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator, protected readonly \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface $shopListResolver, protected readonly \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature)
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
}
