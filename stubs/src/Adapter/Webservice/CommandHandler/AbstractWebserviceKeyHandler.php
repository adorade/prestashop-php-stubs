<?php

namespace PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler;

/**
 * Encapsulates common legacy behavior for adding/editing WebserviceKey
 *
 * @internal
 */
abstract class AbstractWebserviceKeyHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * @param WebserviceKey $webserviceKey
     * @param array $permissions
     */
    protected function setPermissionsForWebserviceKey(\WebserviceKey $webserviceKey, array $permissions)
    {
    }
}
