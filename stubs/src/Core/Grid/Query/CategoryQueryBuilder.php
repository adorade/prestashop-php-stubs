<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class CategoryQueryBuilder builds search & count queries for categories grid.
 */
final class CategoryQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicator $searchCriteriaApplicator
     * @param int $contextLangId
     * @param int $contextShopId
     * @param MultistoreContextCheckerInterface $multistoreContextChecker
     * @param FeatureInterface $multistoreFeature
     * @param int|null $rootCategoryId
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator $searchCriteriaApplicator, $contextLangId, $contextShopId, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, $rootCategoryId = null)
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
