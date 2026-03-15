<?php

namespace PrestaShopBundle\Cache;

class CacheWarmer implements \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface
{
    public function __construct(\Symfony\Component\Filesystem\Filesystem $fileSystem)
    {
    }
    public function warmUp($cacheDir)
    {
    }
    public function isOptional()
    {
    }
}
