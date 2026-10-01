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
     * @param \Doctrine\DBAL\Connection $connection
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter
     * @param string $tablePrefix
     *
     * @throws \PrestaShopBundle\Exception\NotImplementedException
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, $tablePrefix)
    {
    }
    /**
     * @return mixed
     */
    public function getSuppliers()
    {
    }
}
