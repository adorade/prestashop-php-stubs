<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Command;

/**
 * Deletes state
 */
class DeleteWebserviceKeyCommand
{
    /**
     * @param int $webserviceKeyId
     */
    public function __construct(int $webserviceKeyId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\WebserviceKeyId
     */
    public function getWebserviceKeyId(): \PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\WebserviceKeyId
    {
    }
}
