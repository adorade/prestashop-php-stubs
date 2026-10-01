<?php

namespace PrestaShopBundle\Entity\Repository;

class CategoryRepository
{
    use \PrestaShopBundle\Entity\Repository\NormalizeFieldTrait;
    /**
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
     * @param bool $tree if tree needed for categories
     *
     * @return mixed
     */
    public function getCategories($tree = false)
    {
    }
}
