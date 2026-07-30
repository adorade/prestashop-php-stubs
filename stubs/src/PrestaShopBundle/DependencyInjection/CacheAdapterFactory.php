<?php

namespace PrestaShopBundle\DependencyInjection;

/**
 * Class CacheAdapterFactory responsible for returning the right Cache adapter for the associated driver
 */
class CacheAdapterFactory
{
    public function getCacheAdapter(string $driver): \Symfony\Component\Cache\Adapter\AdapterInterface
    {
    }
}
