<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Class ImportMatchRepository retrieves import matches data from the database.
 */
class ImportMatchRepository implements \PrestaShop\PrestaShop\Core\Repository\RepositoryInterface
{
    /**
     * @param Connection $connection
     * @param string $tablePrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $tablePrefix)
    {
    }
    /**
     * Find one item by ID.
     *
     * @param int $id
     *
     * @return array
     */
    public function findOneById($id)
    {
    }
    /**
     * Find one item by name.
     *
     * @param string $name
     *
     * @return array
     */
    public function findOneByName($name)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
    }
    /**
     * Delete one import match by it's id.
     *
     * @param int $id
     */
    public function deleteById($id)
    {
    }
}
