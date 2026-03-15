<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Database;

class EntityMetaData
{
    /**
     * @var string|null
     */
    public $entityClassName;
    /**
     * @var string|null
     */
    public $tableName;
    public function setTableName($name)
    {
    }
    public function getTableName()
    {
    }
    /**
     * @param array $primaryKeyFieldnames
     *
     * @return self
     */
    public function setPrimaryKeyFieldNames(array $primaryKeyFieldnames)
    {
    }
    public function getPrimaryKeyFieldnames()
    {
    }
    public function setEntityClassName($entityClassName)
    {
    }
    public function getEntityClassName()
    {
    }
}
