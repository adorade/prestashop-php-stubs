<?php

namespace PrestaShopBundle\Entity\Repository;

class ManufacturerRepository
{
    use \PrestaShopBundle\Entity\Repository\NormalizeFieldTrait;
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
    public function getManufacturers()
    {
    }
}
