<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * Class CacheProvider.
 */
class CacheProvider extends \PrestaShopBundle\Routing\Converter\AbstractLegacyRouteProvider implements \PrestaShopBundle\Routing\Converter\CacheCleanerInterface
{
    public function __construct(\PrestaShopBundle\Routing\Converter\LegacyRouteProviderInterface $legacyRouteProvider, \Psr\Cache\CacheItemPoolInterface $cache, \PrestaShopBundle\Routing\Converter\CacheKeyGeneratorInterface $cacheKeyGenerator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLegacyRoutes()
    {
    }
    public function clearCache(): void
    {
    }
}
