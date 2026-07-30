<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\QueryResult;

/**
 * Editable data for webservice key
 */
class EditableWebserviceKey
{
    /**
     * @param WebserviceKeyId $webserviceKeyId
     * @param string $key
     * @param string $description
     * @param bool $status
     * @param array $resourcePermissions
     * @param array $associatedShops
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\WebserviceKeyId $webserviceKeyId, $key, $description, $status, array $resourcePermissions, array $associatedShops)
    {
    }
    /**
     * @return WebserviceKeyId
     */
    public function getWebserviceKeyId()
    {
    }
    /**
     * @return string
     */
    public function getKey()
    {
    }
    /**
     * @return string
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
    public function getResourcePermissions()
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShops()
    {
    }
}
