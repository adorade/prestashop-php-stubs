<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Command;

/**
 * Adds new webservice key which is used to access PrestaShop's API
 */
class AddWebserviceKeyCommand
{
    /**
     * @param string $key
     * @param string $description
     * @param bool $status
     * @param array $permissions
     * @param int[] $associatedShops
     */
    public function __construct($key, $description, $status, array $permissions, array $associatedShops)
    {
    }
    /**
     * @return Key
     */
    public function getKey()
    {
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
    }
    /**
     * @return bool
     */
    public function getStatus()
    {
    }
    /**
     * @return array
     */
    public function getPermissions()
    {
    }
    /**
     * @return array
     */
    public function getAssociatedShops()
    {
    }
}
