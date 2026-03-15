<?php

namespace PrestaShopBundle\Entity\Repository;

class SupplierRepository
{
    use \PrestaShopBundle\Entity\Repository\NormalizeFieldTrait;
    /**
     * @var int
     */
    public $shopId;
    /**
     * @param Connection $connection
     * @param ContextAdapter $contextAdapter
     * @param string $tablePrefix
     *
     * @throws NotImplementedException
     */
    public function __construct(\Doctrine\DBAL\Driver\Connection $connection, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, $tablePrefix)
    {
    }
    /**
     * @return mixed
     */
    public function getSuppliers()
    {
    }
}
