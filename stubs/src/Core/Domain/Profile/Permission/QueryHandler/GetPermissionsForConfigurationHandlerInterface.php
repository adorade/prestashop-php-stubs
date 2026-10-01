<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\QueryHandler;

/**
 * Interface for service that gets permissions data for configuration
 */
interface GetPermissionsForConfigurationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Query\GetPermissionsForConfiguration $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\QueryResult\ConfigurablePermissions
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Query\GetPermissionsForConfiguration $query): \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\QueryResult\ConfigurablePermissions;
}
