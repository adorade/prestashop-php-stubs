<?php

namespace PrestaShop\PrestaShop\Adapter\Cache;

/**
 * This class manages CCC features configuration for a Shop.
 */
class CombineCompressCacheConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \Symfony\Component\Filesystem\Filesystem $filesystem, \PrestaShop\PrestaShop\Adapter\Tools $tools, $themePath, $themeName)
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
