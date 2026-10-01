<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Repository;

class CachedModuleRepository
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository $decorated, \Symfony\Contracts\Cache\CacheInterface $cache)
    {
    }
    public function getInstalledModules(): array
    {
    }
    public function getPresentModules(): array
    {
    }
    public function getActiveModules(): array
    {
    }
}
