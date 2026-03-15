<?php

namespace PrestaShop\PrestaShop\Adapter\Cache;

/**
 * This class manages Caching configuration for a Shop.
 */
class CachingConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param MemcacheServerManager $memcacheServerManager
     * @param PhpParameters $phpParameters
     * @param CacheClearerInterface $symfonyCacheClearer
     * @param bool $isCachingEnabled
     * @param string $cachingSystem
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager $memcacheServerManager, \PrestaShop\PrestaShop\Adapter\Configuration\PhpParameters $phpParameters, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $symfonyCacheClearer, $isCachingEnabled, $cachingSystem)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
