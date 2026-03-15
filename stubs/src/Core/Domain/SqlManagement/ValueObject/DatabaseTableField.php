<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject;

/**
 * Class DatabaseTableField stores information about single database table field.
 */
class DatabaseTableField
{
    /**
     * @param string $name
     * @param string $type
     *
     * @throws SqlManagementConstraintException
     */
    public function __construct($name, $type)
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getType()
    {
    }
}
