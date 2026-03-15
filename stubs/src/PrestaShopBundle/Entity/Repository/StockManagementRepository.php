<?php

namespace PrestaShopBundle\Entity\Repository;

abstract class StockManagementRepository
{
    use \PrestaShopBundle\Entity\Repository\NormalizeFieldTrait;
    /**
     * @var ContainerInterface
     */
    protected $container;
    /**
     * @var Connection
     */
    protected $connection;
    /**
     * @var EntityManager
     */
    protected $em;
    /**
     * @var ContextAdapter
     */
    protected $contextAdapter;
    /**
     * @var ImageManager
     */
    protected $imageManager;
    /**
     * @var string
     */
    protected $tablePrefix;
    /**
     * @var int
     */
    protected $foundRows = 0;
    /**
     * @var array
     */
    protected $productFeatures = [];
    /**
     * @param ContainerInterface $container
     * @param Connection $connection
     * @param ContextAdapter $contextAdapter
     * @param ImageManager $imageManager
     * @param string $tablePrefix
     *
     * @throws NotImplementedException
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Doctrine\DBAL\Driver\Connection $connection, \Doctrine\ORM\EntityManager $entityManager, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, $tablePrefix)
    {
    }
    /**
     * Returns the current context
     */
    protected function getCurrentContext(): \Context
    {
    }
    /**
     * Returns the employee set in current context
     */
    protected function getCurrentEmployee(): \Employee
    {
    }
    /**
     * Returns the language ID of the employee in current context
     */
    protected function getCurrentLanguageId(): int
    {
    }
    /**
     * Returns the shop set in current context
     *
     * @throws NotImplementedException
     */
    protected function getCurrentShop(): \Shop
    {
    }
    /**
     * Returns the contextual ID of the shop in current context
     *
     * @throws NotImplementedException
     */
    protected function getContextualShopId(): int
    {
    }
    /**
     * @param array $rows
     *
     * @return array
     */
    protected function addAdditionalData(array $rows)
    {
    }
    /**
     * @param array $rows
     *
     * @return array
     */
    protected function addImageThumbnailPaths(array $rows)
    {
    }
    /**
     * @param QueryParamsCollection $queryParams
     *
     * @return mixed
     */
    public function getData(\PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param string $andWhereClause
     * @param string $having
     * @param string|null $orderByClause
     *
     * @return mixed
     */
    protected function selectSql($andWhereClause = '', $having = '', $orderByClause = null)
    {
    }
    /**
     * @param QueryParamsCollection $queryParams
     *
     * @return int
     */
    public function countPages(\PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param QueryParamsCollection $queryParams
     *
     * @return string
     */
    protected function andWhere(\PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param QueryParamsCollection $queryParams
     *
     * @return string
     */
    protected function having(\PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param QueryParamsCollection $queryParams
     *
     * @return string
     */
    protected function orderBy(\PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @return string
     */
    protected function paginate()
    {
    }
    /**
     * @param Statement $statement
     * @param QueryParamsCollection|null $queryParams
     * @param ProductIdentity|null $productIdentity
     */
    protected function bindStockManagementValues(\Doctrine\DBAL\Driver\Statement $statement, \PrestaShopBundle\Api\QueryParamsCollection $queryParams = null, \PrestaShopBundle\Entity\ProductIdentity $productIdentity = null)
    {
    }
    /**
     * @param Statement $statement
     * @param QueryParamsCollection $queryParams
     */
    protected function bindValuesInStatement(\Doctrine\DBAL\Driver\Statement $statement, \PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param Statement $statement
     * @param QueryParamsCollection $queryParams
     */
    protected function bindMaxResultsValue(\Doctrine\DBAL\Driver\Statement $statement, \PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * Store the number of rows found in a previous query executed with SQL_CALC_FOUND_ROWS.
     */
    protected function getFoundRows()
    {
    }
    /**
     * Get the attribute name subquery to be used in the select field of the main query.
     *
     * @return string
     */
    protected function getAttributeNameSubquery()
    {
    }
    /**
     * Get the combination name subquery to be used in the select field of the main query.
     *
     * @return string
     */
    protected function getCombinationNameSubquery()
    {
    }
    /**
     * @param array $row
     *
     * @return string
     */
    protected function getProductFeatures(array $row)
    {
    }
    /**
     * @param array $row
     *
     * @return int
     */
    protected function getCombinationCoverId(array $row)
    {
    }
    /**
     * @param array $row
     *
     * @return string
     */
    protected function getProductAttributes(array $row)
    {
    }
    /**
     * @param array $rows
     *
     * @return array
     */
    protected function addCombinationsAndFeatures(array $rows)
    {
    }
}
