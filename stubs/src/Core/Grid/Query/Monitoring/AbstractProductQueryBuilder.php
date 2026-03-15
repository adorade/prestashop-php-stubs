<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Monitoring;

/**
 * Provides reusable queries for lists of monitoring products
 */
abstract class AbstractProductQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @var Connection
     */
    protected $connection;
    /**
     * @var string
     */
    protected $dbPrefix;
    /**
     * @var int
     */
    protected $contextLangId;
    /**
     * @var int
     */
    protected $contextShopId;
    /**
     * @var DoctrineSearchCriteriaApplicator
     */
    protected $searchCriteriaApplicator;
    /**
     * @var MultistoreContextCheckerInterface
     */
    protected $multistoreContextChecker;
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param DoctrineSearchCriteriaApplicator $searchCriteriaApplicator
     * @param int $contextLangId
     * @param int $contextShopId
     * @param MultistoreContextCheckerInterface $multistoreContextChecker
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, $contextLangId, $contextShopId, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator $searchCriteriaApplicator, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker)
    {
    }
    /**
     * Provides commonly reusable query for monitoring products lists
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return QueryBuilder
     */
    protected function getProductsCommonQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
