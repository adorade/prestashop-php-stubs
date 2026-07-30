<?php

namespace PrestaShop\PrestaShop\Adapter\Debug;

/**
 * This class manages Debug mode configuration for a Shop.
 */
class DebugModeConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param DebugMode $debugMode
     * @param Configuration $configuration
     * @param string $configDefinesPath
     * @param ClassIndexCacheClearer $classIndexCacheClearer
     * @param DebugProfiling $debugProfiling
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Debug\DebugMode $debugMode, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, $configDefinesPath, \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer $classIndexCacheClearer, \PrestaShop\PrestaShop\Adapter\Debug\DebugProfiling $debugProfiling)
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
