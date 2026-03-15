<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * Class RoutingCacheKeyGenerator generates the cache key for the CacheProvider.
 * In prod environment the key never changes so you need to use cache:clear if you
 * need to update the cache.
 * In dev environment this class inspects the routing files to get their last modification
 * date which is then used to generate the key, hence each time a routing file is modified
 * the cache key changes so the cache is regenerated.
 */
class RoutingCacheKeyGenerator implements \PrestaShopBundle\Routing\Converter\CacheKeyGeneratorInterface
{
    /**
     * RoutingCacheKeyGenerator constructor.
     *
     * @param array $coreRoutingPaths
     * @param array $activeModulesPaths
     * @param string $environment
     */
    public function __construct(array $coreRoutingPaths, array $activeModulesPaths, $environment = 'dev')
    {
    }
    /**
     * @return array
     */
    public function getLastModifications()
    {
    }
    /**
     * @return int|null
     */
    public function getLatestModificationTime()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
    }
}
