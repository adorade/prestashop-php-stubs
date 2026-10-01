<?php

namespace PrestaShopBundle\Routing;

/**
 * This service provides the list of anonymous routes (identified via their _anonymous_controller attribute),
 * since the getRouteCollection method is very heavy to call it includes an internal cache system to reduce the
 * const of this check.
 */
class AnonymousRouteProvider implements \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface
{
    public function __construct(private readonly \Symfony\Bundle\FrameworkBundle\Routing\Router $router, private readonly \Symfony\Contracts\Cache\CacheInterface $cache)
    {
    }
    public function getAnonymousRoutes(): array
    {
    }
    public function isRouteAnonymous(string $routeName): bool
    {
    }
    public function warmUp(string $cacheDir): array
    {
    }
    public function isOptional(): bool
    {
    }
}
