<?php

namespace PrestaShopBundle\Entity\Repository;

class StockRepository extends \PrestaShopBundle\Entity\Repository\StockManagementRepository
{
    /**
     * StockRepository constructor.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     * @param \Doctrine\DBAL\Connection $connection
     * @param \Doctrine\ORM\EntityManager $entityManager
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter
     * @param \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager
     * @param \PrestaShop\PrestaShop\Adapter\StockManager $stockManager
     * @param string $tablePrefix
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Doctrine\DBAL\Connection $connection, \Doctrine\ORM\EntityManager $entityManager, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, \PrestaShop\PrestaShop\Adapter\StockManager $stockManager, $tablePrefix)
    {
    }
    /**
     * @param \PrestaShopBundle\Api\Stock\MovementsCollection $movements
     *
     * @return array
     */
    public function bulkUpdateStock(\PrestaShopBundle\Api\Stock\MovementsCollection $movements)
    {
    }
    /**
     * @param \PrestaShopBundle\Api\Stock\Movement $movement
     * @param bool $syncStock
     *
     * @return mixed
     */
    public function updateStock(\PrestaShopBundle\Api\Stock\Movement $movement, $syncStock = true)
    {
    }
    /**
     * @param \PrestaShopBundle\Api\QueryParamsCollection $queryParams
     *
     * @return mixed
     */
    public function getData(\PrestaShopBundle\Api\QueryParamsCollection $queryParams)
    {
    }
    /**
     * @param int $offset
     * @param int $limit
     * @param \PrestaShopBundle\Api\QueryParamsCollection $queryParams
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
     * @param \PrestaShopBundle\Api\QueryParamsCollection $queryParams
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
