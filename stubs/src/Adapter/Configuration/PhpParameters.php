<?php

namespace PrestaShop\PrestaShop\Adapter\Configuration;

/**
 * Class able to manage configuration stored in Php files.
 */
class PhpParameters
{
    public function __construct($filename)
    {
    }
    /**
     * @return array return the complete configuration
     */
    public function getConfiguration()
    {
    }
    /**
     * Insert a value into configuration at the specified path.
     *
     * @param string $propertyPath
     * @param mixed $value
     */
    public function setProperty($propertyPath, $value)
    {
    }
    /**
     * Persist the modifications done on the original configuration file.
     *
     * @return bool
     */
    public function saveConfiguration()
    {
    }
}
