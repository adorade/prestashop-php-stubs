<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Command;

/**
 * Edits webservice key data
 */
class EditWebserviceKeyCommand
{
    /**
     * @param int $webserviceKeyId
     */
    public function __construct($webserviceKeyId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\WebserviceKeyId
     */
    public function getWebserviceKeyId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\Key|null
     */
    public function getKey()
    {
    }
    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey($key)
    {
    }
    /**
     * @return string|null
     */
    public function getDescription()
    {
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
    }
    /**
     * @return bool|null
     */
    public function getStatus()
    {
    }
    /**
     * @param bool $status
     *
     * @return self
     */
    public function setStatus($status)
    {
    }
    /**
     * @return array|null
     */
    public function getPermissions()
    {
    }
    /**
     * @param array $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions)
    {
    }
    /**
     * @return int[]|null
     */
    public function getShopAssociation()
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return self
     */
    public function setShopAssociation(array $shopAssociation)
    {
    }
}
