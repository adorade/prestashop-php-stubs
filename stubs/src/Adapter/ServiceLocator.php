<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * @internal
 *
 * To be removed in 1.7.1.
 */
class ServiceLocator
{
    public static function setServiceContainerInstance(?\PrestaShop\PrestaShop\Core\Foundation\IoC\Container $container)
    {
    }
    public static function getContainer(): ?\PrestaShop\PrestaShop\Core\Foundation\IoC\Container
    {
    }
    /**
     * Get a service depending on its given $serviceName.
     *
     * @param string $serviceName
     *
     * @return mixed|object
     *
     * @throws CoreException
     */
    public static function get($serviceName)
    {
    }
}
