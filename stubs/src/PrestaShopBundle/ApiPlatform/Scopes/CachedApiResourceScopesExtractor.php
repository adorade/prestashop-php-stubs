<?php

namespace PrestaShopBundle\ApiPlatform\Scopes;

/**
 * This class decorates ApiResourceScopesExtractor and stores the returned value in a filesystem
 * cache, we additionally keep the result in a local class field to avoid too many request on
 * the cache and multiple un-serialization.
 *
 * @internal
 */
class CachedApiResourceScopesExtractor implements \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface
{
    public function __construct(private readonly \Psr\Cache\CacheItemPoolInterface $cacheItemPool, private readonly \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface $decorated)
    {
    }
    public function getAllApiResourceScopes(): array
    {
    }
    public function getEnabledApiResourceScopes(): array
    {
    }
}
