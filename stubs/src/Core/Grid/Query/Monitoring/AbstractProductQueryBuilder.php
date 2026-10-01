<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Monitoring;

/**
 * Provides reusable queries for lists of monitoring products
 */
abstract class AbstractProductQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder
{
    /**
     * @var \Doctrine\DBAL\Connection
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
     * @var \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator
     */
    protected $searchCriteriaApplicator;
    /**
     * @var \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface
     */
    protected $multistoreContextChecker;
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator $searchCriteriaApplicator
     * @param int $contextLangId
     * @param int $contextShopId
     * @param \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, $contextLangId, $contextShopId, \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator $searchCriteriaApplicator, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker)
    {
    }
    /**
     * Provides commonly reusable query for monitoring products lists
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    protected function getProductsCommonQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
