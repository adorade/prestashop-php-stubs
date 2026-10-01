<?php

namespace PrestaShopBundle\Entity\Repository;

class StockMovementRepository extends \PrestaShopBundle\Entity\Repository\StockManagementRepository
{
    /**
     * @var string
     */
    protected $dateFormatFull;
    /**
     * StockMovementRepository constructor.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     * @param \Doctrine\DBAL\Connection $connection
     * @param \Doctrine\ORM\EntityManager $entityManager
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter
     * @param \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager
     * @param string $tablePrefix
     * @param string $dateFormatFull
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Doctrine\DBAL\Connection $connection, \Doctrine\ORM\EntityManager $entityManager, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, $tablePrefix, string $dateFormatFull)
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
     * @param array $rows
     *
     * @return array
     */
    protected function addAdditionalData(array $rows)
    {
    }
    /**
     * Get movements from employees.
     *
     * @return mixed
     */
    public function getEmployees()
    {
    }
    /**
     * Get type of movements from employees.
     *
     * @param bool $grouped
     *
     * @return mixed
     */
    public function getTypes($grouped = false)
    {
    }
    /**
     * @param \PrestaShopBundle\Entity\StockMvt $stockMvt
     *
     * @return int
     */
    public function saveStockMvt(\PrestaShopBundle\Entity\StockMvt $stockMvt)
    {
    }
    protected function addFormattedDate(array $rows): array
    {
    }
}
