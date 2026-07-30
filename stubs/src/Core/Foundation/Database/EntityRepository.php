<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Database;

class EntityRepository
{
    /**
     * @var EntityManager
     */
    protected $entityManager;
    /**
     * @var DatabaseInterface
     */
    protected $db;
    /**
     * @var string
     */
    protected $tablesPrefix;
    /**
     * @var EntityMetaData
     */
    protected $entityMetaData;
    /**
     * @var QueryBuilder
     */
    protected $queryBuilder;
    public function __construct(\PrestaShop\PrestaShop\Core\Foundation\Database\EntityManager $entityManager, $tablesPrefix, \PrestaShop\PrestaShop\Core\Foundation\Database\EntityMetaData $entityMetaData)
    {
    }
    public function __call($method, $arguments)
    {
    }
    /**
     * Return ID field name.
     *
     * @return mixed
     *
     * @throws Exception
     */
    protected function getIdFieldName()
    {
    }
    /**
     * Returns escaped+prefixed current table name.
     *
     * @return mixed
     */
    protected function getTableNameWithPrefix()
    {
    }
    /**
     * Returns escaped DB table prefix.
     *
     * @return mixed
     */
    protected function getPrefix()
    {
    }
    /**
     * Return a new empty Entity depending on current Repository selected.
     *
     * @return mixed
     */
    public function getNewEntity()
    {
    }
    /**
     * This function takes an array of database rows as input
     * and returns an hydrated entity if there is one row only.
     *
     * Null is returned when there are no rows, and an exception is thrown
     * if there are too many rows.
     *
     * @param array $rows Database rows
     */
    protected function hydrateOne(array $rows)
    {
    }
    protected function hydrateMany(array $rows)
    {
    }
    /**
     * Find one entity in DB.
     *
     * @param int $id
     *
     * @return array|mixed|null
     *
     * @throws Exception
     */
    public function findOne($id)
    {
    }
    /**
     * Find all entities in DB.
     *
     * @return array
     */
    public function findAll()
    {
    }
}
