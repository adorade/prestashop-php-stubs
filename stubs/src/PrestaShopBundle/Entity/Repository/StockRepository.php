<?php

namespace PrestaShopBundle\Entity\Repository;

class StockRepository extends \PrestaShopBundle\Entity\Repository\StockManagementRepository
{
    /**
     * StockRepository constructor.
     *
     * @param ContainerInterface $container
     * @param Connection $connection
     * @param EntityManager $entityManager
     * @param ContextAdapter $contextAdapter
     * @param ImageManager $imageManager
     * @param StockManager $stockManager
     * @param string $tablePrefix
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Doctrine\DBAL\Driver\Connection $connection, \Doctrine\ORM\EntityManager $entityManager, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, \PrestaShop\PrestaShop\Adapter\StockManager $stockManager, $tablePrefix)
    {
    }
    /**
     * @param MovementsCollection $movements
     *
     * @return array
     */
    public function bulkUpdateStock(\PrestaShopBundle\Api\Stock\MovementsCollection $movements)
    {
    }
    /**
     * @param Movement $movement
     * @param bool $syncStock
     *
     * @return mixed
     */
    public function updateStock(\PrestaShopBundle\Api\Stock\Movement $movement, $syncStock = true)
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
     * @param int $offset
     * @param int $limit
     * @param QueryParamsCollection $queryParams
     *
     * @return array
     */
    public function getDataExport($offset, $limit, \PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param string $andWhereClause
     * @param string $having
     * @param null $orderByClause
     *
     * @return mixed
     */
    protected function selectSql($andWhereClause = '', $having = '', $orderByClause = null)
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
     * @param array $rows
     *
     * @return array
     */
    protected function addAdditionalData(array $rows)
    {
    }
    protected function addCombinationsAndFeatures(array $rows)
    {
    }
}
