<?php

namespace PrestaShop\PrestaShop\Adapter\Debug;

/**
 * This class manages Debug mode configuration for a Shop.
 */
class DebugModeConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param DebugMode $debugMode Debug mode manager
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param string $configDefinesPath Path to the application defines path
     * @param \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer $classIndexCacheClearer
     * @param DebugProfiling $debugProfiling Debug profiling manager
     * @param \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer
     */
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Debug\DebugMode $debugMode, private \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private string $configDefinesPath, private \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer $classIndexCacheClearer, private \PrestaShop\PrestaShop\Adapter\Debug\DebugProfiling $debugProfiling, private \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer)
    {
    }
    /**
     * Returns configuration used to manage Debug mode in back office.
     *
     * @return array
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
