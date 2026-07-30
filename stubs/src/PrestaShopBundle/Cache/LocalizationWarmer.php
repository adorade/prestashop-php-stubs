<?php

namespace PrestaShopBundle\Cache;

class LocalizationWarmer implements \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface
{
    public function __construct($version, $country)
    {
    }
    public function warmUp($cacheDir)
    {
    }
    public function isOptional()
    {
    }
}
