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
     * @param ContainerInterface $container
     * @param Connection $connection
     * @param EntityManager $entityManager
     * @param ContextAdapter $contextAdapter
     * @param ImageManager $imageManager
     * @param string $tablePrefix
     * @param string $dateFormatFull
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Doctrine\DBAL\Driver\Connection $connection, \Doctrine\ORM\EntityManager $entityManager, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, $tablePrefix, string $dateFormatFull)
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
     * @param StockMvt $stockMvt
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
