<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Class TimezoneRepository.
 */
class TimezoneRepository implements \PrestaShop\PrestaShop\Core\Repository\RepositoryInterface
{
    /**
     * @param Connection $connection
     * @param string $tablePrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $tablePrefix)
    {
    }
    /**
     * Final all timezones from database.
     *
     * @return array
     */
    public function findAll()
    {
    }
}
