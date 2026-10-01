<?php

namespace PrestaShopBundle\Cache;

/**
 * Since PrestaShop 9.0 we have multiple kernels with each their cache folders, the cache are split in this way:
 *  - var/cache/dev/admin
 *  - var/cache/dev/admin-api
 *  - var/cache/dev/front
 *  - var/cache/prod/admin
 *  - var/cache/prod/admin-api
 *  - var/cache/prod/front
 *  - var/cache/test/admin
 *  - var/cache/test/admin-api
 *  - var/cache/test/front
 *
 * Historically the cache was simply in:
 *  - var/cache/dev
 *  - var/cache/prod
 *  - var/cache/test
 *
 * These legacy cache folders are also used by legacy components (PrestaShop FO, autoload, modules, ...) but when we
 * use ./bin/console cache:clear is used it only clears the new cache folders and some elements stay present in the legacy
 * folder upper level, usually indicated in the _PS_CACHE_DIR_ legacy const.
 *
 * The purpose of this service is to clear the remaining elements that are still in the upper level so it will loop
 * through the elements present in the root environment folder and delete them (it filters out the cache related to
 * Symfony apps).
 *
 * This service implements the CacheClearerInterface and autoconfigure, this way it is called automatically by Somfony
 * when the cache:clear command is executed.
 */
class LegacyCacheClearer implements \Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface
{
    public function __construct(protected readonly string $legacyCacheDir)
    {
    }
    public function clear(string $cacheDir)
    {
    }
}
