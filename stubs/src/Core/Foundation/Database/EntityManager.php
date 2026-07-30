<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Database;

class EntityManager
{
    public function __construct(\PrestaShop\PrestaShop\Core\Foundation\Database\DatabaseInterface $db, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * Return current database object used.
     *
     * @return DatabaseInterface
     */
    public function getDatabase()
    {
    }
    /**
     * Return current repository used.
     *
     * @param string $className
     *
     * @return mixed
     */
    public function getRepository($className)
    {
    }
    /**
     * Return entity's meta data.
     *
     * @param string $className
     *
     * @return mixed
     *
     * @throws \PrestaShop\PrestaShop\Adapter\CoreException
     */
    public function getEntityMetaData($className)
    {
    }
    /**
     * Flush entity to DB.
     *
     * @param EntityInterface $entity
     *
     * @return $this
     */
    public function save(\PrestaShop\PrestaShop\Core\Foundation\Database\EntityInterface $entity)
    {
    }
    /**
     * DElete entity from DB.
     *
     * @param EntityInterface $entity
     *
     * @return $this
     */
    public function delete(\PrestaShop\PrestaShop\Core\Foundation\Database\EntityInterface $entity)
    {
    }
}
