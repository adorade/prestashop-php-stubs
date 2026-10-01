<?php

namespace PrestaShopBundle\Entity\Repository;

class FeatureAttributeRepository
{
    use \PrestaShopBundle\Entity\Repository\NormalizeFieldTrait;
    /**
     * FeatureAttributeRepository constructor.
     *
     * @param \Doctrine\DBAL\Driver\Connection $connection
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter
     * @param string $tablePrefix
     *
     * @throws \PrestaShopBundle\Exception\NotImplementedException
     */
    public function __construct(\Doctrine\DBAL\Driver\Connection $connection, \PrestaShop\PrestaShop\Adapter\LegacyContext $contextAdapter, $tablePrefix)
    {
    }
    /**
     * @return mixed
     */
    public function getAttributes()
    {
    }
    /**
     * @return mixed
     */
    public function getFeatures()
    {
    }
}
