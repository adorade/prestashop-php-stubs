<?php

namespace PrestaShopBundle\Service\Database;

/**
 * Naming strategy for Doctrine ORM to use prefixed database table names.
 */
class DoctrineNamingStrategy extends \Doctrine\ORM\Mapping\UnderscoreNamingStrategy
{
    /**
     * Constructor.
     *
     * Prefix is given by injection, set in app/config/parameters.yml.
     *
     * @param string $prefix
     */
    public function __construct(private \Doctrine\Common\Annotations\Reader $reader, private string $prefix)
    {
    }
    /**
     * {@inheritdoc}
     *
     * This override adds a prefix to the underscored table name.
     */
    public function classToTableName($className)
    {
    }
    /**
     * {@inheritdoc}
     *
     * This override adds a prefix to the underscored table name.
     */
    public function joinTableName($sourceEntity, $targetEntity, $propertyName = null)
    {
    }
}
